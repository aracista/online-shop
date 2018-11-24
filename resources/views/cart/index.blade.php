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
				<td>
					<form action="{{route('cart.update',$cartItem->id)}}" method="POST" role="form">
						@csrf
						@method('PUT')
						<div class="form-group">
							<input type="hidden" class="form-control" name="quantity" value="1">
						</div>
						<input type="submit" class="btn btn-sm btn-default" value="+"></input>
					</form>
					<label>{{$cartItem->quantity}}</label>
					<form action="{{route('cart.update',$cartItem->id)}}" method="POST" role="form">
						@csrf
						@method('PUT')
						<div class="form-group">
							<input type="hidden" class="form-control" name="quantity" value="-1">
						</div>
						<input type="submit" class="btn btn-sm btn-default" value="-"></input>
					</form>
				</td>  
				<td>{{$cartItem->attributes->has('warna')?$cartItem->attributes->warna:''}}</td>
				<td>
					<form action="{{route('cart.destroy',$cartItem->id)}}" method="POST" role="form">
						@csrf
						@method('DELETE')
						<button type="submit" class="button btn-danger" value="Delete">Delete</button>
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
	<a href="" class="button">Checkout</a>
</div>

@endsection