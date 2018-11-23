@extends('admin.layout.admin')

@section('content')

<h3>Add Product</h3>
<ul>
	@forelse($products as $product)
	<li>
		<h4>Name of product :{{$product->nama}}</h4>
	</li>

		@empty

		<h3>No Products</h3>

	@endforelse

</ul>

@stop