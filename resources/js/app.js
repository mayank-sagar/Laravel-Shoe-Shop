import {documentReady} from './utils';
import ProductSlider from './Elements/ProductSlider';
import ProductSpinner from './Elements/ProductSpinner';
import CartMenuItem from './Elements/CartMenuItem';
import AddToCart from './Elements/AddToCart';
import Search from './Elements/Search';

documentReady(() => {
    const search = new Search();
    const searchOvelayBtn = document.querySelector('.show-search-panel-btn');
    searchOvelayBtn.addEventListener('click',() => {
        search.show();
   });

    new ProductSlider();
    const cart = new CartMenuItem();
    cart.syncCart();

    const addToCartProduct = new AddToCart();
    const productDetailSpinner = document.getElementById('product-detail-spinner');
    const productSpinner = new ProductSpinner(productDetailSpinner);
    

   
    
     
    // Add To Cart 
    addToCartProduct.onProductAdded = () => {
        cart.syncCart();
        productSpinner.reset();
    };
    productSpinner.onValuesChanged = (val) => {
        addToCartProduct.quantity = val;
    }

   

    // if(spinners.length > 0) {
    //     spinners.forEach((sinnerDom) => {
    //         new ProductSpinner(sinnerDom);
    //     })
    // }
});