    <div class="col-sm-4">
                <div class="best_shoes">
                            <p class="best_text">
                                <a href="{{ route('home.shoes-detail', [ 'slug' => $product->slug ] ) }}">
									{{$product->product_name}}
								</a>
                            </p>
                            <div class="shoes_icon"><img 
                            style="padding:30px"
                            src="{{ asset(config('global.uploads').'/'.$product->image) }}"></div>
                            <div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="{{ asset('images/star-icon.png') }}"></a></li>
    	    						<li><a href="#"><img src="{{ asset('images/star-icon.png') }}"></a></li>
    	    						<li><a href="#"><img src="{{ asset('images/star-icon.png') }}"></a></li>
    	    						<li><a href="#"><img src="{{ asset('images/star-icon.png') }}"></a></li>
    	    						<li><a href="#"><img src="{{ asset('images/star-icon.png') }}"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">$ <span style="color: #ff4e5b;">{{$product->price}}</span></div>
    						</div>
    					</div>
                </div>
    </div>
