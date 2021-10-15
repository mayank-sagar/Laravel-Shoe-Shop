import request from '../request';
import Toastify from 'toastify-js'; 

class CartMenuItem {

    constructor() {
        this.domCountRef  = document.getElementById('cart-menu-item-count');
        this.domCountRef.innerHTML  = "0";
        this.domCountRef.style.display = 'none';
    }

    increaseCount() {
        const domCount  = parseInt(this.domCountRef.innerHTML,10);
        domCount++;
        if (domCount) {
            this.domCountRef.style.display = 'flex';
        }
        this.domCountRef.innerHTML = domCount;
        this.domCountRef.style.display = 'none';
    }

    decreaseCount() {
        const domCount  = parseInt(this.domCountRef.innerHTML,10);
        if(!domCount) return;
        
        domCount--;
        this.domCountRef.innerHTML = domCount;
        if(domCount === 0) {
            this.domCountRef.style.display = 'none';
        }                
    }

    async syncCart() {
        const cartToken = localStorage.getItem('cart_token');
        try {
            const res = await request.post('/cart/count',{
                token: cartToken
            });
            this.domCountRef.innerHTML =  res.data.count;
            if(res.data.count) {
                this.domCountRef.style.display = 'flex';
            }
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
    }
}



export default CartMenuItem;