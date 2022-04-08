<section2 class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i> <span>0129-
						12323-123123</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="/">
						<!-- replace logo here --> <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40" font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">AVIATO</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<div class="col-md-4 col-xs-12 col-sm-4">
				<ul class="top-menu text-right list-inline">

					<!--  Cart -->
					<li><i class="tf-ion-android-cart"></i><a href="{{ route('cart') }}">Cart(
							{{ $carts->total_quantity() + $carts2->total_quantity()}} - {{ $carts->total_price() + $carts2->total_price()}}$
							)</a></li>

					<div class="action">
						@guest
						@if (Route::has('login'))
						<div class="profile" onclick="menuToggle();">
							<img src="/images/0.jpg" alt="">
						</div>
						@endif
						@else
						<div class="profile" onclick="menuToggle();">
							<img src="/images/1.jpg" alt="">
						</div>
						@endguest

						<div class="menu">
							<ul>
								@guest
								@if (Route::has('login'))
								<li>
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								@endif

								@if (Route::has('register'))
								<li>
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
								@endif
								@else
								<li>
									<a id="navbarDropdown"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>
							
									<li aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</li>
								</li>
						</div>
				</ul>
				@endguest
			</div>

			</ul>
		</div>
	</div>
	</div>
</section2>
<script>
	function menuToggle() {
		const toggleMenu = document.querySelector('.menu');
		toggleMenu.classList.toggle('active')
	}
</script>
<!-- End Top Header Bar -->

<!-- Main Menu Section -->
<section2 class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
			</div>

			<!-- Navbar Links -->

			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">
					<li class="dropdown "><a href="/">Trang chủ</a></li>
					<li class="dropdown "><a href="{{ route('aocuoi') }}">Áo
							cưới</a></li>
					<li class="dropdown "><a href="{{ route('anhcuoi') }}">Ảnh
							cưới</a></li>
					<li class="dropdown "><a href="#">Tuyển dụng</a></li>

					<li class="dropdown search dropdown-slide"><a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i>
							Search</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post">
									<input type="search" class="form-control" placeholder="Search...">
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</nav>
</section2>