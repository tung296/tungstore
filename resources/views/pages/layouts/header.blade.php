<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Tây Sơn-Vũ Chính-Thái Bình</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0363325454</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(!isset($data['user']))
						<li><a href="{{route('signup')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
						<li><a href="{{route('forgot_password')}}">Quên Mật khẩu</a></li>
						@else
						<li><a href="{{ route('info') }}"><i class="fa fa-user"></i>{{ (isset($data['user'])) ? $data['user']->name : "Tài khoản"}}</a></li>
							<li><a href="{{route('logout')}}">Đăng xuất</a></li>
							<li><a href="{{ route('list') }}">Đơn hàng</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="/" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form action="{{ route('search') }}" role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng {{ (isset($data['user'])) ? count($data['cart']) : "(Trống)" }}  <i class="fa fa-chevron-down"></i></div>
							@if(isset($data['user']))
							<div class="beta-dropdown cart-body">
							@foreach($data['cart'] as $cart)
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="{{route('product_detail',$cart->product->id)}}"><img src="{{ URL::asset('storage/'.$cart->product->images) }}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{ $cart->product->name }}</span>
											<!-- <span class="cart-item-options">Size: XS; Colar: Navy</span> -->
											<span class="cart-item-amount">{{ $cart->qty }} *<span>{{ number_format($cart->product->price) }} ₫</span></span>
										</div>
									</div>
									<div class="delcart">
										<a href="{{ route('delcart',$cart->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</div>
								</div>
							@endforeach
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{ number_format($data['total']) }} ₫</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{ route('order')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							@endif
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Category</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li class="dis"><a href="{{route('home')}}">Trang chủ</a></li>
						<li class="dis"><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
							@foreach($categories as $category)
								<li><a href="{{route('category',$category->id)}}">{{ $category->name }}</a></li>
							@endforeach
							</ul>
						</li>
						<li class="dis"><a href="{{route('about')}}">Thông tin</a></li>
						<li class="dis"><a href="{{route('contact')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> 