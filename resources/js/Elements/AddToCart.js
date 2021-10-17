import request from "../request";
import Toastify from 'toastify-js'; 

class AddToCart {
    constructor() {
        this.quantity = 1;
        this.addToCart = document.querySelector('[data-action="add_to_cart"]');
        this.token = localStorage.getItem('cart_token') ? localStorage.getItem('cart_token') : '';
        this.productId = -1;
        if(this.addToCart) {
            this.productId = this.addToCart.getAttribute('data-product-id');
        }
        if(this.token) {
            this.updateCartLink(this.token);
        }
        this.__addEventListener();    
    }


    publishProductAdded() {
        if(this.onProductAdded) {
            if(this.onProductAdded) {
                this.onProductAdded();
            }
        }
    }

    updateCartLink(token) {
        const routeLink = document.querySelector('.cart-menu-item').getAttribute('href');
        const cartlinkRoute = routeLink.split('?')[0].trim();
        document.querySelector('.cart-menu-item').setAttribute('href',cartlinkRoute+'?token='+token);
    }

    __addEventListener() {
        this.addToCart.addEventListener('click',async () => {
            try {
                const res = await request.post('/cart/store',{
                    token : this.token,
                    product_id : this.productId,
                    quantity:this.quantity
                })
                Toastify({
                    text: "Your product has been added to cart.",
                    className: "msg-success"
                }).showToast();
                const token = res.data.token;
                if(!this.token) {
                    this.token = token;
                    localStorage.setItem('cart_token',token);
                    this.updateCartLink(token);
                }
                this.publishProductAdded();
            } catch(errRes) {
                let config = {
                    text: "Something Went Wrong",
                    className: "msg-danger"
                };
                if(errRes.message) {
                    config = {text: errRes.message,
                        className: "msg-danger"}
                }
                Toastify({...config}).showToast();
            }
        });
    }
}

export default AddToCart;