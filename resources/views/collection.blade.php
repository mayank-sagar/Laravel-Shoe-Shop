@extends('layouts.site')

@section('title','Contact Us')
    
@section('content')
	<!-- new collection section start -->
  <div class="collection_text">New Collection</div>
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Collection</strong></h1>
    	    <p class="consectetur_text">We’ve taken some inspiration from the key global trends and put our own stamp on them. By focusing on subtle and chic looks, we’ve produced relaxed designs that are as stylish as they are comfortable.</p>
    	    <div class="collection_section_2">
    	    	<div class="row">
				@foreach($products as $product)
				<x-new-product :product="$product" :isNew="!(($loop->index + 1) % 2 == 0)" ></x-new-product>
				@endforeach
    	    	</div>

		<div class="d-flex justify-content-center my-4">
		{{$products->links()}}
		</div>
    	    </div>
    	</div>
    </div>
	<!-- new collection section end -->
@endsection