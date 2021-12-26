@if($isShow())

<div class="banner_section">
    <div class="container-fluid">
        <section class="slide-wrapper">
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($banners as $banner)
                            <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="{{$loop->index === 0 ? 'active': ''}}"></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        
                        @foreach($banners as $banner)
                            <div class="carousel-item {{$loop->index === 0 ? 'active' : ''}}">
                                <div class="row">
                                    <div class="col-sm-2 padding_0">
                                        <p class="mens_taital">{{$banner->product->category->name}}</p>
                                        <div class="page_no">{{$loop->index+1}}</div>
                                        <p class="mens_taital_2">{{$banner->product->category->name}}</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="banner_taital">
                                            <h1 class="banner_text">{{$banner->title}}</h1>
                                            <h1 class="mens_text" style="line-height:89%"><strong>{{$banner->subtitle}}</strong></h1>
                                            <p class="lorem_text">{{$banner->description}}</p>
                                            <!-- <button class="buy_bt">Buy Now</button> -->
                                                <button onclick="document.getElementById('banner-shoe-details-{{$banner->product->id}}').click()" class="more_bt">See More</button>
                                                <a id="banner-shoe-details-{{$banner->product->id}}" href="{{route('home.shoes-detail', [ 'slug' => $banner->product->slug ] )}}" style="display:none"></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="shoes_img"><img src="{{ asset(config('global.uploads').'/'.$banner->product->image) }}"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endif