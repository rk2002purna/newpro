@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Reset Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Reset Password</h4>
	<p class=""></p>
	
	 <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" name="email" id="email" class="form-control unicase-form-control text-input"  >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" name="password" id="password" class="form-control unicase-form-control text-input"  >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Comfrim Password <span>*</span></label>
		    <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control unicase-form-control text-input"  >
		</div>
	  	
		
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset PasswordLink</button>
	</form>					
</div>
<!-- Sign-in -->
	</div>
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
@include('frontend.body.brands')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection