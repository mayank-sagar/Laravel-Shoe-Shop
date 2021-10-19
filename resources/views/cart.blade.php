@extends('layouts.site')

@section('title','Cart')

@section('content')

<!-- new collection section start -->
<div class="layout_padding collection_section">
    	<div class="container">
    	    <div class="collection_section_2 mb-4">
            <h1>Shopping Cart</h1>
            <hr/>
            
            @forelse ( $items as $item)
                <div class="row">
                    <div  class="col-sm-4">
                        <img class="img-fluid" src="{{$item->product->mainImage}}" />
                    </div>
                    <div  class="col-sm-8">
                            <div class="row cart-product-height">
                                <div class="col-sm-10 cart-product-container">
                                <h2 class="product-heading-link"> <a href="#">{{$item->product->name}}</a></h2>
                                <div class="content-item">
                                    <div class="cart-spinner-container">
                                <div class="product-spinner">
                                    <button class="product-spinner-add-btn">+</button>
                                    <input type="text" value="{{ $item->quantity }}" class="product-spinner-counter"/>
                                    <button class="product-spinner-remove-btn">-</button>
                                </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                <form action="{{route('cart.item.delete')}}" method="POST" >
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{$item->id}}" />
                                    <input type="hidden" name="token" value="{{$cartToken}}" />
                                    <button type="submit" class="buy_bt cart-action-style">Remove</button>
                                </form>
                                </div>
                                </div>
                                <div class="col-sm-2 text-right">
                                <strong>${{($item->quantity * $item->product->price)}}</strong>
                                </div>
                            </div>
                    </div>
                </div>
                <hr/>                
            @empty
                <div class="row">
                    <div  class="col-12 d-flex justify-content-center align-items-center flex-column">
                            <h2>Your Cart is empty.</h2>
                        <a href="{{ route('home.shoes') }}" class="buy_bt add-to-cart-shownow-style">Shop Now</a>
                    </div>
                </div>
                <hr/>
            @endforelse
            
            @if(count($items) > 0) 
                <div class="row d-flex align-items-end flex-column">
                <h2>Subtotal ({{$totalItems}} items):   ${{$total}}</h2>
                <a href="{{ route('shipping-address') }}" class="buy_bt add-to-cart-style"> <i class="fa fa-shopping-cart"></i> Checkout</a>
                </div>
            @endif
    	    
        </div>
    </div>
	<!-- new collection section end -->
@endsection