<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | QSQT</title>
	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<header id="header">
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<div class="logo pull-left">
								<a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/logodt.png')}}" style="margin-right: 5px;" alt="" height="40px" width="40px" /></a>
							</div>
							<ul class="nav navbar-nav collapse navbar-collapse" style="fon">
								<li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
								</li>
								<li><a href="{{URL::to('/show-cart')}}">Cart</a></li>
								<?php
								$customer_id = session()->get('customer_id');
								$shipping_id = session()->get('shipping_id');
								$customer_name = session()->get('customer_name');
								if ($customer_id != NULL && $shipping_id == NULL) {
								?>
									<li><a href="{{URL::to('/checkout')}}"> Checkout</a></li>
								<?php
								} elseif ($customer_id != NULL && $shipping_id != NULL) {
								?>
									<li><a href="{{URL::to('/payment')}}"> Checkout</a></li>
								<?php
								} else {
								?>
									<li><a href="{{URL::to('/login')}}"> Checkout</a></li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
					<div class="col-sm-8">
						<form action="{{URL::to('/search')}}" method="POST">
							{{csrf_field()}}
							<div class="search_box pull-left">
								<input type="text" name="keywords_submit" style="width: 400px;" placeholder="Search" />
								<input type="submit" name="search_items" style="margin-top: 0; color: white;width: 100px;" class="btn btn-primary btn-sm" value="Search">
							</div>
						</form>
						<div class="mainmenu pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<?php
								$customer_id = session()->get('customer_id');

								if ($customer_id != NULL) {
								?>
									<li><a href="#"><img src="{{asset('public/frontend/images/profile.png')}}" alt="" height="25px" width="25px" /> {{$customer_name}} </a></li>
									<li><a href="{{URL::to('/logout-checkout')}}"> Logout</a></li>

								<?php
								} else {
								?>
									<li><a href="{{URL::to('/login')}}"> Login</a></li>
									<li><a href="{{URL::to('/register')}}"> Register</a></li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 style="color: black;">Category</h2>
						<div class="panel-group category-products" id="accordian">
							@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div>
						<div class="brands_products">
							<h2 style="color: black;">Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script>
		$.validate({
			modules: 'security',
			onModulesLoaded: function() {
				var optionalConfig = {
					fontSize: '12pt',
					padding: '4px',
					bad: 'Very bad',
					weak: 'Weak',
					good: 'Good',
					strong: 'Strong'
				};

				$('input[name="pass"]').displayPasswordStrength(optionalConfig);
			}
		});
	</script>
</body>

</html>