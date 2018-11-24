@extends('layout.main')

@section('content')
<div class="row">
	<h3>Cart Item</h3>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Harga</th>
				<th>Qty</th>
				<th>Warna</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cartItems as $cartItem)
			<tr>
				<td>{{$cartItem->name}}</td>
				<td>Rp&nbsp;{{$cartItem->price}}</td>
				<td style="width: 50px;">
					<form action="{{route('cart.update',$cartItem->id)}}" method="POST" role="form">
						@csrf
						@method('PUT')
						<div class="form-group">
							<input type="text" class="form-control" name="quantity" value="{{$cartItem->quantity}}">
						</div>

						<td>
						<div class="form-group">
							<select name="warna" id="inputWarna" class="form-control" required="required">
								
								<option value="{{$cartItem->attributes->has('warna')?$cartItem->attributes->warna:''}}">{{$cartItem->attributes->has('warna')?$cartItem->attributes->warna:''}}</option>
								<option value="merah">Merah</option>
								<option value="biru">Biru</option>
								<option value="putih">Putih</option>
							</select>
						</div>
					</td>
						
				  
				<td>
					<input style="float: left;" type="submit" class="button success small" value="OK"></input>
					</form>
					<form action="{{route('cart.destroy',$cartItem->id)}}" method="POST" role="form">
						@csrf
						@method('DELETE')
						<button type="submit" class="button small alert" value="Delete">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach

			<tr>
				<td>Total</td>
				<td>
				Rp&nbsp;{{Cart::getTotal()}}
				</td>
				<td>{{Cart::getTotalQuantity()}}</td>
			</tr>
		</tbody>
	</table>
	<a href="{{url('/checkout')}}" class="button">Checkout</a>
</div>

@endsection