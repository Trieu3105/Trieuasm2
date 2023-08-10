@extends('layouts.frontend')
@section('title', 'Order Items')
@section('content')
	<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url({{ asset('frontend/assets/img/bg/breadcrumb.jpg') }})">
		<div class="container-fluid">
			<div class="breadcrumb-content text-center">
				<h2>My Order</h2>
				<ul>
					<li><a href="{{ url('/') }}">home</a></li>
					<li>my orders</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="shop-page-wrapper shop-page-padding ptb-100">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
                <h3 class="sidebar-title">User Menu</h3>
                    <div class="sidebar-categories">
                        <ul>
							<li><a href="{{ route('profile.index') }}">Profile</a></li>
                            <li><a href="{{ route('orders.index') }}">Orders</a></li>
                            <li><a href="{{ route('favorite.index') }}">Favorites</a></li>
                        </ul>
                    </div>
				</div>
				<div class="col-lg-9">
					<div class="shop-product-wrapper res-xl">
						<div class="table-content table-responsive">
							<table class="table table-bordered table-striped">
							<thead>
									<tr>
										<th>remove</th>
										<th>images</th>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($orders as $order)
										<tr>    
											<td>
												{{ $order->code }}<br>
												<span style="font-size: 12px; font-weight: normal"> {{ $order->order_date }}</span>
											</td>
											<td>{{ number_format($order->grand_total) }}</td>
											<td>{{ $order->status }}</td>
											<td>{{ $order->payment_status }}</td>
											<td>
												<a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">details</a>
											</td>
										</tr>
									@empty
										<tr>
										<tbody>
																													<form id="delete-cart" action="http://127.0.0.1:8000/cart/a87ff679a2f3e71d9181a67b7542122c" method="POST" class="d-none"></form>
											<input type="hidden" name="_token" value="uyfNmolAm6S3hfZjwqtaKOYXJ67w4tGm7LouUe5I">											<input type="hidden" name="_method" value="delete">										
										<form action="http://127.0.0.1:8000/cart/a87ff679a2f3e71d9181a67b7542122c" method="post"></form>
										<input type="hidden" name="_token" value="uyfNmolAm6S3hfZjwqtaKOYXJ67w4tGm7LouUe5I">										<input type="hidden" name="_method" value="put">										<tr>
											<td class="product-remove">
												<a href="" onclick="event.preventDefault();document.getElementById('delete-cart').submit();" class="delete"><i class="pe-7s-close"></i></a>
											</td>
											<td class="product-thumbnail">
												<a href="http://127.0.0.1:8000/product/t-shirt-freestyle"><img src="http://127.0.0.1:8000/frontend/assets/img/cart/3.jpg" alt="T-shirt Freestyle" style="width:100px"></a>
											</td>
											<td class="product-name"><a href="http://127.0.0.1:8000/product/t-shirt-freestyle">T-shirt Freestyle</a></td>
											<td class="product-price-cart"><span class="amount">25</span></td>
											<td class="product-quantity">
												<input type="number" name="items[a87ff679a2f3e71d9181a67b7542122c][quantity]" min="1" required="" value="1">
											</td>
											<td class="product-subtotal">25</td>
										</tr>
																													
											<input type="hidden" name="_token" value="uyfNmolAm6S3hfZjwqtaKOYXJ67w4tGm7LouUe5I">											<input type="hidden" name="_method" value="delete">										
										<form action="http://127.0.0.1:8000/cart/eccbc87e4b5ce2fe28308fd9f2a7baf3" method="post"></form>
										<input type="hidden" name="_token" value="uyfNmolAm6S3hfZjwqtaKOYXJ67w4tGm7LouUe5I">										<input type="hidden" name="_method" value="put">										<tr>
											<td class="product-remove">
												<a href="" onclick="event.preventDefault();document.getElementById('delete-cart').submit();" class="delete"><i class="pe-7s-close"></i></a>
											</td>
											<td class="product-thumbnail">
												<a href="http://127.0.0.1:8000/product/t-shirt-black"><img src="http://127.0.0.1:8000/frontend/assets/img/cart/3.jpg" alt="T-shirt Black" style="width:100px"></a>
											</td>
											<td class="product-name"><a href="http://127.0.0.1:8000/product/t-shirt-black">T-shirt Black</a></td>
											<td class="product-price-cart"><span class="amount">20</span></td>
											<td class="product-quantity">
												<input type="number" name="items[eccbc87e4b5ce2fe28308fd9f2a7baf3][quantity]" min="1" required="" value="1">
											</td>
											<td class="product-subtotal">20</td>
										</tr>
																													
											<input type="hidden" name="_token" value="uyfNmolAm6S3hfZjwqtaKOYXJ67w4tGm7LouUe5I">											<input type="hidden" name="_method" value="delete">										
										<form action="http://127.0.0.1:8000/cart/8f14e45fceea167a5a36dedd4bea2543" method="post"></form>
										<input type="hidden" name="_token" value="uyfNmolAm6S3hfZjwqtaKOYXJ67w4tGm7LouUe5I">										<input type="hidden" name="_method" value="put">										<tr>
											<td class="product-remove">
												<a href="" onclick="event.preventDefault();document.getElementById('delete-cart').submit();" class="delete"><i class="pe-7s-close"></i></a>
											</td>
											<td class="product-thumbnail">
												<a href="http://127.0.0.1:8000/product/t-shirt-sport"><img src="http://127.0.0.1:8000/frontend/assets/img/cart/3.jpg" alt="T-shirt sport" style="width:100px"></a>
											</td>
											<td class="product-name"><a href="http://127.0.0.1:8000/product/t-shirt-sport">T-shirt sport</a></td>
											<td class="product-price-cart"><span class="amount">12</span></td>
											<td class="product-quantity">
												<input type="number" name="items[8f14e45fceea167a5a36dedd4bea2543][quantity]" min="1" required="" value="1">
											</td>
											<td class="product-subtotal">12</td>
										</tr>
																	</tbody>
										</tr>
									@endforelse
								</tbody>
							</table>
							{{ $orders->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection