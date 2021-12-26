
@extends('layouts.site')

@section('title','Pullshoes')

@section('content')
	<!-- new collection section start -->
	<x-home-new-collection></x-home-new-collection>
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Racing Boots</strong></h1>
    	    <p class="consectetur_text">Similar to touring boots, racing boots are designed for riding a motorcycle on hard pavement (either the street or a race track) and are usually between 10 and 14 inches in height and made from a combination of leather, metal, plastic and/or man-made composite materials to create a form-fitting, but comfortable boot.</p>
    	</div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="shoes-img3"><img src="{{ asset('images/shoes-img3.png') }}"></div>
    				</div>
    				<div class="col-md-4">
    					<div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
    					<div class="number_text"><strong>$ <span style="color: #0a0506">100</span></strong></div>
    					<div class="clear-fix"></div>
						<a href="{{ route('home.racing-boots') }}" class="seemore seemorelink">See More</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	<x-home-regular-shoes></x-home-regular-shoes>
   	<!-- contact section start -->
    <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Contact Now</strong></h1>
    	</div>
	<x-contact></x-contact>
    </div>
   	<!-- contact section end -->
@endsection