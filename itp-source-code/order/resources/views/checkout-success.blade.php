@extends('layout')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-body text-center">
			<img src="/assets/img/done.png"  alt="" class="img" style="height:250px;">
			<h1 style="font-weight: 700;">Success!</h1>
			<h4 >Your Order has been placed successfully.</h4>
			<p> Order ID : {{ $id ?? null}} </p>
			<h4 style = "font-size: 18px;" >_Thank You_<h4p>
				<p></p>
			<a href="/customer/home" class="btn btn-primary">Shop More</a>

		</div>
         
    </div>
</div>
@endsection