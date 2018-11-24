@extends('admin.layout.admin')

@section('content')

<h3>Product</h3>
<ul>
	@forelse($products as $product)
	<li>
		<h4>Name of product :{{$product->nama}}</h4>
		<h4>Category :{{$product->category?$product->category->nama:"N/A"}}</h4>
		<form action="{{route('product.destroy',$product->id)}}" method="POST">
		@csrf
		@method('DELETE')
			<button type="submit" class="btn btn-sm btn-danger">Delete</button>
		</form>
	</li>

		@empty

		<h3>No Products</h3>

	@endforelse

</ul>

@stop