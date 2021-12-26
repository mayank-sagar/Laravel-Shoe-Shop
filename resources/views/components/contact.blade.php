<div class="container-fluid ram">
      <div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="{{route('home.contact')}}" method="post">
                            @csrf
                            <div class="form-group">
                              <input type="text" value="{{old('name') ? old('name') : ''}}" class="email-bt" placeholder="Name" name="name">
                              @if($errors->has('name'))
                                  <div class="text-danger">{{ $errors->first('name') }}</div>
                              @endif
                            </div>
                            <div class="form-group">
                              <input type="text" value="{{old('contact_number') ? old('contact_number') : ''}}" class="email-bt" placeholder="Phone Number" name="contact_number">
                              @if($errors->has('contact_number'))
                                  <div class="text-danger">{{ $errors->first('contact_number') }}</div>
                              @endif
                            </div>
                            <div class="form-group">
                              <input type="text" value="{{old('email') ? old('email') : ''}}" class="email-bt" placeholder="Email" name="email">
                              @if($errors->has('email'))
                                  <div class="text-danger">{{ $errors->first('email') }}</div>
                              @endif
                            </div>
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message">{{old('message') ? old('message') : ''}}</textarea>
                                @if($errors->has('message'))
                                  <div class="text-danger">{{ $errors->first('message') }}</div>
                                @endif
                            </div>
                       </div> 
                       <div class="send_btn">
                        <button type="submit" class="main_bt">Send</button>
                       </div>    
                       </form>                 
                    </div>
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="shop_banner">
    					<div class="our_shop">
    						<button class="out_shop_bt">Our Shop</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->