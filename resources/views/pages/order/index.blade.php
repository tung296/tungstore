@extends('pages.layouts.index')
@section('content')

<div class="container">
		<div id="content">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div>
			@endif
			<form action="{{ route('order')}}" method="post" class="beta-form-checkout">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>
						<input type="hidden" name="id"  value="{{ $user->id }}">

						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" name="name" id="name" placeholder="Họ tên" value="{{ $user->name }}">
						</div>

						<!-- <div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="expample@gmail.com">
						</div> -->

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" name="adress" id="adress" placeholder="Street Address" >
						</div>
						
						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" name="phone" id="phone" value="{{ $user->phone }}">
						</div>
						
						<!-- <div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes"></textarea>
						</div> -->
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
                            @foreach($data['cart'] as $cart)
							<input type="hidden" name="cart[]" value="{{ $cart->id }}">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="{{ URL::asset('storage/'.$cart->product->images) }}" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large">{{ $cart->product->name }}</p>
												<!-- <span class="color-gray your-order-info">Color: Red</span> -->
												<span class="color-gray your-order-info price">{{ number_format($cart->product->price) }} ₫</span>
												<span class="color-gray your-order-info"><input class="changeqty" type="number" name="qty" value="{{ $cart->qty }}" data-id="{{ $cart->id }}" ></span>
											</div>
										</div>
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
                            @endforeach
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 id="totail" class="color-black">{{ number_format($data['total']) }} ₫</h5></div>
									<input type="hidden" name="total_money" value="{{ $data['total'] }}">
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="1" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="2" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>
							<input class="btn_submit text-center beta-btn primary" type="submit" value="Đặt hàng">
							<!-- <div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div> -->
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
