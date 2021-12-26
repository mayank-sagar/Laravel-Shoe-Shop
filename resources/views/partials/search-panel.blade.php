<div class="search-overlay d-none">
    <div class="container">
        <div class="row mt-4 no-gutters">
            <div class="col-10">
                <div class="form-group">
                    <input 
                    data-detail-route="{{ route('home.shoes-detail', [ 'slug' => 'slug' ]) }}"
                    data-search-route="{{route('search')}}" type="email" class="form-control search-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search Shoes">
                </div>
            </div>
            <div class="col-2">
                <button 
                class="btn btn-primary ml-2 search-button">
                <i class="fa fa-search"></i>
                </button>
                <button class="btn btn-danger search-cancel-button">
                <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="row search-container">
        
        </div>

    </div>
</div>