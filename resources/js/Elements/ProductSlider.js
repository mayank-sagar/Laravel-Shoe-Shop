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

export default ProductSlider;