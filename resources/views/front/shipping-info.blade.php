@extends('layout.main')

@section('content')
<div class="row">
	<div class="small-6 small-centered columns">
	<h3>shipping info</h3>
	<form action="{{route('address.store')}}" method="POST" role="form">
	@csrf
		<div class="form-group">
			<label for="AddressLine">Address Line</label>
			<input type="text" class="form-control" name="addressline" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="City">City</label>
			<input type="text" class="form-control" name="city" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="State">State</label>
			<input type="text" class="form-control" name="state" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="Zip">Zip</label>
			<input type="text" class="form-control" name="zip" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="Country">Country</label>
			<input type="text" class="form-control" name="country" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="Phone">Phone</label>
			<input type="text" class="form-control" name="phone" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="button primary">Proceed to payment</button>
	</form>
	</div>
</div>
@stop