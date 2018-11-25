@extends('admin.layout.admin')
@section('content')
    <h3>Order</h3>
    <ul>
    	@foreach($orders as $orders)
    	<li>
    		<h2>Order by {{$orders->user->name}}</h2>
    		<h5>Items</h5>
    		<table class="table">
    			<tr>
    				<th>Nama</th>
    				<th>Jumlah</th>
    				<th>Harga</th>
    			</tr>
    			@foreach($orders->orderItems() as $item)
    			<tr>
    				<td>{{$item->nama}}</td>
    				<td>{{$item->pivot->quantity}}</td>
    			</tr>
    			@endforeach
    			
    		</table>

    	</li>
    	@endforeach
    </ul>
@endsection