class ProductSpinner {
    
    constructor(productDom) {
        this.increment = productDom.querySelector('.product-spinner-add-btn'); 
        this.decrement =  productDom.querySelector('.product-spinner-remove-btn');
        this.counterField = productDom.querySelector('.product-spinner-counter');
        this.addIncreementListener();
        this.removeIncreementListener();
        this.counterFieldListener();
    }

    publishChanges(val) {
        if(this.onValuesChanged) {
            this.onValuesChanged(val);
        }
    }

    reset() {
        this.counterField.value = '1';
        this.publishChanges('1');
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
            this.publishChanges(parseInt(this.counterField.value,10));    
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
            this.publishChanges(parseInt(this.counterField.value,10));
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

export default ProductSpinner;