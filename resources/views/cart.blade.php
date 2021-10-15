@extends('layouts.site')

@section('title','Cart')

@section('content')

<!-- new collection section start -->
<div class="layout_padding collection_section">
    	<div class="container">
    	    <div class="collection_section_2 mb-4">
            <h1>Shopping Cart</h1>
            <hr/>
            <div class="row">
                <div  class="col-12 d-flex justify-content-center align-items-center flex-column">
                        <h2>Your Cart is empty.</h2>
                    <a href="{{ route('home.shoes') }}" class="buy_bt add-to-cart-shownow-style">Shop Now</a>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div  class="col-sm-4">
                    <img class="img-fluid" src="https://m.media-amazon.com/images/I/91Qo4nTsttL._UX625_.jpg" />
                </div>
                <div  class="col-sm-8">
                        <div class="row cart-product-height">
                            <div class="col-sm-10 cart-product-container">
                            <h2 class="product-heading-link"> <a href="#">Product Name</a></h2>
                            <div class="content-item">
                                <div class="cart-spinner-container">
                            <div class="product-spinner">
                                <button class="product-spinner-add-btn">+</button>
                                <input type="text" class="product-spinner-counter"/>
                                <button class="product-spinner-remove-btn">-</button>
                            </div>
                                </div>
                            </div>
                            <div class="d-flex">
                            <button class="buy_bt cart-action-style">Remove</button>
                            </div>
                            </div>
                            <div class="col-sm-2 text-right">
                            <strong>$199</strong>
                            </div>
                        </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div  class="col-sm-4">
                    <img class="img-fluid" src="https://m.media-amazon.com/images/I/91Qo4nTsttL._UX625_.jpg" />
                </div>
                <div  class="col-sm-8">
                        <div class="row cart-product-height">
                            <div class="col-sm-10 cart-product-container">
                            <h2 class="product-heading-link"> <a href="#">Product Name</a></h2>
                            <div class="content-item">
                                <div class="cart-spinner-container">
                            <div class="product-spinner">
                                <button class="product-spinner-add-btn">+</button>
                                <input type="text" class="product-spinner-counter"/>
                                <button class="product-spinner-remove-btn">-</button>
                            </div>
                                </div>
                            </div>
                            <div class="d-flex">
                            <button class="buy_bt cart-action-style">Remove</button>
                            </div>
                            </div>
                            <div class="col-sm-2 text-right">
                            <strong>$199</strong>
                            </div>
                        </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div  class="col-sm-4">
                    <img class="img-fluid" src="https://m.media-amazon.com/images/I/91Qo4nTsttL._UX625_.jpg" />
                </div>
                <div  class="col-sm-8">
                        <div class="row cart-product-height">
                            <div class="col-sm-10 cart-product-container">
                            <h2 class="product-heading-link"> <a href="#">Product Name</a></h2>
                            <div class="content-item">
                                <div class="cart-spinner-container">
                            <div class="product-spinner">
                                <button class="product-spinner-add-btn">+</button>
                                <input type="text" class="product-spinner-counter"/>
                                <button class="product-spinner-remove-btn">-</button>
                            </div>
                                </div>
                            </div>
                            <div class="d-flex">
                            <button class="buy_bt cart-action-style">Remove</button>
                            </div>
                            </div>
                            <div class="col-sm-2 text-right">
                            <strong>$199</strong>
                            </div>
                        </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div  class="col-sm-4">
                    <img class="img-fluid" src="https://m.media-amazon.com/images/I/91Qo4nTsttL._UX625_.jpg" />
                </div>
                <div  class="col-sm-8">
                        <div class="row cart-product-height">
                            <div class="col-sm-10 cart-product-container">
                            <h2 class="product-heading-link"> <a href="#">Product Name</a></h2>
                            <div class="content-item">
                                <div class="cart-spinner-container">
                            <div class="product-spinner">
                                <button class="product-spinner-add-btn">+</button>
                                <input type="text" class="product-spinner-counter"/>
                                <button class="product-spinner-remove-btn">-</button>
                            </div>
                                </div>
                            </div>
                            <div class="d-flex">
                            <button class="buy_bt cart-action-style">Remove</button>
                            </div>
                            </div>
                            <div class="col-sm-2 text-right">
                            <strong>$199</strong>
                            </div>
                        </div>
                </div>
            </div>
            <hr/>
            <div class="row d-flex align-items-end flex-column">
            <h2>Subtotal (2 items):   $3,152.00</h2>
            <button class="buy_bt add-to-cart-style"> <i class="fa fa-shopping-cart"></i> Checkout</button>
            </div>
    	    </div>
    </div>
	<!-- new collection section end -->
@endsection