@extends('admin.layout.admin')

@section('content')

<h3>Add Product</h3>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		

	<form action="{{route('product.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" value="" class="form-control">
		</div>
		<div class="form-group">
			<label for="deskripsi">Deskripsi</label>
			<input type="text" name="deskripsi" value="" class="form-control">
		</div>
		<div class="form-group">
			<label for="warna">Warna</label>
			<select name="warna" class="form-control">
				<option value="biru">Biru</option>
				<option value="merah">Merah</option>
				<option value="putih">Putih</option>
			</select>
		</div>
		<div class="form-group">
			<label for="category_id">Kategori</label>
			<select name="category_id" class="form-control">
				@foreach($categories as $categoris)
				<option value="{{$categoris->id}}">{{$categoris->nama}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="gambar">Gambar</label>
			<input type="file" name="gambar" value="" class="form-control">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>

	</form>

</div>
</div>
@stop