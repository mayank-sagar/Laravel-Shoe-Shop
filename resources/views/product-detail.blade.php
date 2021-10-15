@extends('layouts.site')

@section('title','Product Details')

@section('content')
	<!-- new collection section start -->


    <div class="layout_padding collection_section">
    	<div class="container">
    	    <div class="collection_section_2">
    	    <div class="row">
            <div class="col-sm-12 col-lg-8">
              <div class="product-image-gallery">
                <div class="product-image-gallery-thumbnails">
                      <img src="{{ $product->image }}" class="product-image-gallery-thumbnails-active" />
                      @foreach($product->gallery as $gallery)
                        <img src="{{ $gallery->gallery_image }}" />
                      @endforeach      
                  </div>
                  <div class="product-image-gallery-container">
                    <img id="main-product-image" src="{{ $product->image }}"/>
                  </div>
                </div>
              </div>
            <div class="col-sm-12 col-lg-4">
            <h1>{{ $product->product_name }}</h1>
            <div>
            {{ $product->description }}
            </div>
            <div class="row">
              <div class="col-lg-5 col-sm-3 product-spinner-col">
                <div id="product-detail-spinner" class="product-spinner">
                  <button class="product-spinner-add-btn">+</button>
                  <input type="text" class="product-spinner-counter" value="1"/>
                  <button class="product-spinner-remove-btn">-</button>
                </div>
              </div>
              <div class="col-6">
                <button  data-product-id="{{  $product->id }}" data-action="add_to_cart" class="buy_bt add-to-cart-style">Add to cart</button>
              </div>
            </div>
            </div>
            
            </div>

    	    </div>
    </div>
	<!-- new collection section end -->
@endsection