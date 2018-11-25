@extends('layout.main')

@section('content')

<div class="row">
<div class="small-6 small-centered columns">
<form action="{{route('payment.store')}}" method="post" id="payment-form">
	@csrf
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button class="submit button success" type="submit">Submit Payment</button>
</form>
</div>
</div>


@stop