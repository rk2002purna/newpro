@extends('frontend.main_master')
@section('content')

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="x-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 x-text text-center">
					
					<div class="image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/home-banner123.jpg') }}" alt=""> </div>
					<p>We are sorry, the page you've requested is not available. </p>

					<a href="{{ url('/') }}"><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->


@endsection