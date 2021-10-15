@extends('layouts.site')

@section('title','Contact Us')
    
@section('content')
	<!-- new collection section start -->
  <div class="collection_text">New Collection</div>
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Collection</strong></h1>
    	    <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
				@foreach($products as $product)
				<x-new-product :product="$product" :isNew="!(($loop->index + 1) % 2 == 0)" ></x-new-product>
				@endforeach
    	    	</div>

				{{$products->links()}}
    	    </div>
    	</div>
    </div>
	<!-- new collection section end -->
@endsection