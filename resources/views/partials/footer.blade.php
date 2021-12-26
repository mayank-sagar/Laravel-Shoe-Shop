	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="{{ asset('images/footer-logo.png') }}"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="{{ asset('images/phone-icon.png') }}"><span class="map_text">(71) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="{{ asset('images/email-icon.png') }}"><span class="map_text">shoestore@contact.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>	
    							<li><a href="#"><img src="{{ asset('images/fb-icon.png') }}"></a></li>
    							<li><a href="#"><img src="{{ asset('images/twitter-icon.png') }}"></a></li>
    							<li><a href="#"><img src="{{ asset('images/in-icon.png') }}"></a></li>
    							<li><a href="#"><img src="{{ asset('images/google-icon.png') }}"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="{{ asset('images/map-icon.png') }}"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Shoe house</h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<form action="{{ route('subscription')}}" method="POST">
						<div class="form-group">
						@csrf
							<input type="text" class="enter_email" placeholder="Enter Your email" name="email">
							@if($errors->has('email'))
                                  <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
						</div>
						<button type="submit" class="subscribr_bt">Subscribe</button>
					</form>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2021 All Rights Reserved.</div>
