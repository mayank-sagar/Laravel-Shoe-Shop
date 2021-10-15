<div class="col-md-6 mb-4">
    	    			<div class="about-img">
    	    				@if($isNew)
							<button class="new_bt">New</button>
    	    				@endif
							<div class="shoes-img"><img src="{{ asset(config('global.uploads').'/'.$product->image) }}"></div>
    	    				<p class="sport_text">
								<a href="{{ route('home.shoes-detail', [ 'slug' => $product->slug ] ) }}">
									{{$product->product_name}}
								</a>
							</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">{{$product->price}}</strong> </div>
							<x-rating></x-rating>
    	    			</div>
    	    			<!-- <button class="seemore_bt">See More</button> -->
</div>