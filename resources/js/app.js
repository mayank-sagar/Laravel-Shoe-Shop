import {documentReady} from './utils';
import ProductSlider from './Elements/ProductSlider';
import ProductSpinner from './Elements/ProductSpinner';
import CartMenuItem from './Elements/CartMenuItem';
import AddToCart from './Elements/AddToCart';

documentReady(() => {
    new ProductSlider();
    const cart = new CartMenuItem();
    cart.syncCart();
    const addToCartProduct = new AddToCart();
    const productDetailSpinner = document.getElementById('product-detail-spinner');
    const productSpinner = new ProductSpinner(productDetailSpinner);
    
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