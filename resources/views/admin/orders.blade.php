@extends('admin.layout.admin')
@section('content')
    <h3>Order</h3>
    <ul>
    	@foreach($orders as $orders)
    	<li>
    		<h4>Order by {{$orders->user->name}} <br> Total Harga {{$orders->total}}</h4>
    		<form action="{{route('toggle.deliver',$orders->id)}}" method="post" class="pull-right">
    			@csrf
    			<label for="delivered">Delivered	</label>
  				<input type="checkbox" name="delivered" value="1" {{$orders->delivered==1?"checked":""}}>
  				<input type="submit" name="" value="Submit">
    		</form>
    		<table class="table table-bordered">
    			<tr>
    				<th>Nama</th>
    				<th>Jumlah</th>
    				<th>Harga</th>
    			</tr>
    			@foreach($orders->orderItems as $item)
    			<tr>
    				<td>{{$item->nama}}</td>
    				<td>{{$item->pivot->quantity}}</td>
    				<td>{{$item->pivot->total}}</td>

    			</tr>
    			@endforeach
    			
    		</table>

    	</li>
    	@endforeach
    </ul>
@endsection