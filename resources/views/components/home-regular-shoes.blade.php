<div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>Reliable Regular Shoes</strong></h1>
    	    <p class="consectetur_text">You may be dressed in your favourite T-shirt and jeans for a social gathering, but your outfit is incomplete unless matched with a pair of smart casual shoes for men. The first pairs of casual shoes were probably the protective footbags made from animal skin and bark-string net by cavemen.</p>
    	</div>
    </div>
	<!-- new collection section end -->
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
                @forelse($getShoes() as $shoe)
                <x-shoes :product="$shoe"></x-shoes>
    			@empty
                <div class="col-md-12 mb-12">
                        <p class="text-center">
                            <strong>No new products available.</strong>
                        </p>
                    </div>
                @endforelse
    		</div>
    		<div class="buy_now_bt">
    			<button onclick="document.getElementById('shoes-link') ? document.getElementById('shoes-link').click(): false" class="buy_text">Buy Now</button>
    		    <a id="shoes-link" href="{{ route('home.shoes') }}" style="display:none"></a>
            </div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->