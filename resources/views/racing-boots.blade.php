@extends('layouts.site')

@section('title','Contact Us')
    
@section('content')
	<!-- new collection section start -->
  <div class="collection_text">New Collection</div>
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>Racing Boots</strong></h1>
    	    <p class="consectetur_text">Similar to touring boots, racing boots are designed for riding a motorcycle on hard pavement (either the street or a race track) and are usually between 10 and 14 inches in height and made from a combination of leather, metal, plastic and/or man-made composite materials to create a form-fitting, but comfortable boot.</p>
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