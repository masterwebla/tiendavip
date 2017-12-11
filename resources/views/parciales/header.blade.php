<header id="header" class="header-transparent">
			<div id="header-wrap">
				<div class="container">

					<!--LOGO-->
					<div id="logo">
						<a href="index.html" class="logo" data-dark-logo="{{ asset('images/logo-dark.png') }}">
							<img src="{{ asset('images/logo.png') }}" alt="Polo Logo">
						</a>
					</div>
					<!--END: LOGO-->

					<!--MOBILE MENU -->
					<div class="nav-main-menu-responsive">
						<button class="lines-button x">
							<span class="lines"></span>
						</button>
					</div>
					<!--END: MOBILE MENU -->

					<!--SHOPPING CART -->
					<div id="shopping-cart">
						<span class="shopping-cart-items">8</span>
						<a href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
					</div>
					<!--END: SHOPPING CART -->

					<!--TOP SEARCH -->
					<div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
						<form action="search-results-page.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
						</form>
					</div>
					<!--END: TOP SEARCH -->

					<!--NAVIGATION-->
					@include('parciales.menu')
					<!--END: NAVIGATION-->
				</div>
			</div>
		</header>