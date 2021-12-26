<div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Collection</strong></h1>
    	    <p class="consectetur_text">
            Fresh new collection to fullfill your fashion diet. We have all the new collections of shoes that you will need.
            </p>
    	    <div class="collection_section_2">
    	    	<div class="row">
                    @forelse($getNewProducts() as $product)
    	    		<div class="col-md-6 mb-4">
    	    			<div class="about-img">
    	    				@if($loop->index === 0)
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
                        @if($loop->index === 0)
    	    			<a id="collection-href" style="display:none" href="{{route('home.collection')}}"></a>
						<button  onClick="document.getElementById('collection-href').click()"  class="seemore_bt">See More</button>
                        @endif
                        </div>

                    @empty
                    <div class="col-md-12 mb-12">
                        <p class="text-center">
                            <strong>No new collection available.</strong>
                        </p>
                    </div>
                    @endforelse
    	    	</div>
    	    </div>
    	</div>
    </div>