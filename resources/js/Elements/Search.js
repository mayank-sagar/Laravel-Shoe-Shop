import request from "../request";
import Toastify from 'toastify-js'; 
class Search {

    constructor() {
        this.searchOverlay = document.querySelector('.search-overlay');
        this.search  = document.querySelector('.search-button');
        this.searchInput = document.querySelector('.search-input');           
        this.searchRoute = this.searchInput.getAttribute('data-search-route');
        this.productDetailRoute = this.searchInput.getAttribute('data-detail-route');
        this.csrfToken = document.querySelector("meta[name='csrf-token']").value;
        this.searchContainer = document.querySelector('.search-container');
        this.cancelButton = document.querySelector('.search-cancel-button');
        this.registerSearchButtonListener();
        this.registerCancelSearchButtonListener();
    }

    show() {
        this.searchOverlay.classList.add('d-block');
        this.searchOverlay.classList.remove('d-none');
    }

    hide() {
        this.searchOverlay.classList.add('d-none');
        this.searchOverlay.classList.remove('d-block');
    }

    registerCancelSearchButtonListener() {
        this.cancelButton.addEventListener('click',() => {
            this.searchContainer.innerHTML = '';
            this.searchOverlay.classList.remove('d-block');
            this.searchOverlay.classList.add('d-none');
        })
    }
    registerSearchButtonListener() {
            this.search.addEventListener('click',async () => {
                try {
                    const res = await request.post(this.searchRoute,
                        {
                            search:this.searchInput.value,
                            _token:this.csrfToken})
                    const products = res.data.products; 
                    const html = products.reduce((html,product) => {
                        html = `
                        ${html}
                        <div class="col-sm-12">
                            <a href="${this.productDetailRoute.replace(/slug/,product.slug)}">${product.product_name}</a> - $${product.price}
                        </div>
                        `;
                        return html;
                    },'');
                    this.searchContainer.innerHTML = '';
                    if(html) {
                        this.searchContainer.innerHTML = html;
                    } else {
                        this.searchContainer.innerHTML = `
                        <div class="col-sm-12">
                            No items found.
                        </div>
                        `;
                    }
                } catch(e) {
                    console.log({e});
                    Toastify({
                        text: "Something Went wrong. Please try again later",
                        className: "msg-danger"
                    }).showToast();
                }
            });
    }
}

export default Search;