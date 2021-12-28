@if(session()->has('message'))
            <div style="margin-bottom:0px" class="alert alert-success site-alert-primary">
                {{session()->get('message')}}
            </div>
@endif	
<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="{{ route('home.index') }}"><img src="{{ asset('images/logo.png') }}"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link {{ $currentRoute === 'home.index' ? 'active-link': '' }}" href="{{ route('home.index') }}" >Home</a>
                           <a class="nav-item nav-link {{ $currentRoute === 'home.collection' ? 'active-link': '' }}" href="{{ route('home.collection') }}" >New Collection</a>
                           <a class="nav-item nav-link {{ $currentRoute === 'home.shoes' ? 'active-link': '' }}" href="{{ route('home.shoes') }} ">Shoes</a>
                           <a class="nav-item nav-link {{ $currentRoute === 'home.racing-boots' ? 'active-link': '' }}" href="{{ route('home.racing-boots') }}">Racing Boots</a>
                           <a class="nav-item nav-link {{ $currentRoute === 'home.contact' ? 'active-link': '' }}" href="{{ route('home.contact') }}">Contact</a>
                           @guest
                           <a class="nav-item nav-link {{ $currentRoute === 'register' ? 'active-link': '' }}" href="{{ route('register') }}">Register</a>
                           <a class="nav-item nav-link {{ $currentRoute === 'login' ? 'active-link': '' }}" href="{{ route('login') }}">Login</a>
                           @endguest
                           @auth
                           <form action="{{route('logout')}}" method="POST">
                               @csrf
                               <button style="background: transparent;" type="submit" class="nav-item nav-link" href="{{ route('logout') }}">Logout</button>
                           </form>
                           @endauth
                           <a class="nav-item nav-link last show-search-panel-btn" href="javascript:void(0)"><img src="{{ asset('images/search_icon.png') }}"></a>
                        <x-cart-menu-item></x-cart-menu-item>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
<x-banner :showRoute="route('home.index')"></x-banner>
@include("partials.search-panel")
</div>