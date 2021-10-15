import {documentReady} from './utils';

class ProductSlider {

    constructor() {
      
       const images =  document.querySelectorAll('.product-image-gallery-thumbnails img');
       
       images.forEach((image) => {
        if(image.classList.contains('product-image-gallery-thumbnails-active') && !this.current) {
            this.current = image;
        } else if(image.classList.contains('product-image-gallery-thumbnails-active')) {
            image.classList.remove('product-image-gallery-thumbnails-active')
        }
       })
 
       this.images = images;

       if(!this.current && this.images.length > 0) {
        this.images.item(0).classList.add('product-image-gallery-thumbnails-active');
        this.current = this.images.item(0);
       }

       this.mainImage =  document.getElementById("main-product-image"); 
       if(this.mainImage &&  this.images.length > 0 && this.current) {
         this.addImagesClickListener();   
       }
    }

    addImagesClickListener() {
        this.images.forEach((img) => {
            img.addEventListener('click',() => {
                debugger;
                this.current.classList.remove('product-image-gallery-thumbnails-active');
                const targetImageHref = img.getAttribute('src');
                this.mainImage.setAttribute('src',targetImageHref);  
                this.current = img;
                img.classList.add('product-image-gallery-thumbnails-active');
            })
        })
    }


}


class ProductSpinner {
    
    constructor(productDom) {
        this.increment = productDom.querySelector('.product-spinner-add-btn'); 
        this.decrement =  productDom.querySelector('.product-spinner-remove-btn');
        this.counterField = productDom.querySelector('.product-spinner-counter');
        this.addIncreementListener();
        this.removeIncreementListener();
        this.counterFieldListener();
    }

    addIncreementListener() {
        this.increment.addEventListener('click',() => {
            const currentValue = this.counterField.value;
            
            if(!currentValue) {
                this.counterField.value = '1';
            }

            if(currentValue) {
                 let currentParsedValue = parseInt(currentValue,10);
                 currentParsedValue++;
                 this.counterField.value = currentParsedValue;
            }    
        })
    }

    removeIncreementListener() {
        this.decrement.addEventListener('click',() => {
            const currentValue = this.counterField.value;
            
            if(!currentValue) {
                this.counterField.value = '1';
            }

            if(currentValue) {
                 let currentParsedValue = parseInt(currentValue,10);
                 if(currentParsedValue && currentParsedValue != 1) {
                    currentParsedValue--;
                 }
                this.counterField.value = currentParsedValue;
            }    
        })
    }


    counterFieldListener() {
        this.counterField.addEventListener('keyup',(e) => {
            if(!(/^[0-9]*$/.test(this.counterField.value) && this.counterField.value != "0")) {
                if(this.counterField.value.length > 0) {
                    this.counterField.value = this.counterField.value.substring(0,this.counterField.value.length-1)
                }
            }
            
            if(this.counterField.value.length === 0) {
                this.counterField.value = 1;
            }
        })
    }

}

documentReady(() => {
    new ProductSlider();
    const spinners = document.querySelectorAll('.product-spinner');
    if(spinners.length > 0) {
        spinners.forEach((sinnerDom) => {
            new ProductSpinner(sinnerDom);
        })
    }
});