@extends('layouts.site')

@section('title','Shoes | Pullshoes')
    
@section('content')
	<!-- New Arrivals section start -->
  <div class="collection_text">Shoes</div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>Reliable Regular Shoes</strong></h1>
    	    <p class="consectetur_text">
			You may be dressed in your favourite T-shirt and jeans for a social gathering, but your outfit is incomplete unless matched with a pair of smart casual shoes for men. The first pairs of casual shoes were probably the protective footbags made from animal skin and bark-string net by cavemen. 
			</p>
    	</div>
    </div>
    <div class="layout_padding gallery_section">
    	<div class="container">
		<div class="row" >
@forelse($products as $product)
    	<x-shoes :product="$product" ></x-shoes>
@empty
        <div class="col-md-12 mb-12">
            <p class="text-center">
                <strong>No new collection available.</strong>
            </p>
        </div>
@endforelse
</div>
			<!-- <div class="buy_now_bt">
    			<button class="buy_text">Buy Now</button>
    		</div> -->
		<div class="d-flex justify-content-center my-4">
				{{$products->links()}}
		</div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->
@endsection