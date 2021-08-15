@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')

            <div class="col-md-2">

            </div><!--//end col md 2-->

            <div class="col-md-8">
            <div class="card">
                <h3 class="text-center">Change Password</h3>

                <div class="card-body">
                    <form method="post" action="{{ route('user.password.update')}}" >
                      @csrf
                    
                    <div class="form-group">
		                <label class="info-title" for="exampleInputEmail1">Current Passwowrd<span></span></label>
		                <input type="password" name="oldpassword" id="Current Passwowrd" class="form-control" >
		            </div>

                    <div class="form-group">
		                <label class="info-title" for="exampleInputEmail1">New Password<span></span></label>
		                <input type="password" name="password" id="password" class="form-control" >
		            </div>

                    <div class="form-group">
		                <label class="info-title" for="exampleInputEmail1">Confirm Passwowrd<span></span></label>
		                <input type="password" name="password_confirmation" id="password_confirmation"  class="form-control">
		            </div>

                    <div class="form-group">
		                <button type="submit" class="btn btn-danger">Upadate</button>
		            </div>

                </div>
            </div><!--//end col md 6-->
            </div>

        </div><!--//end row-->

    </div>

</div>

@endsection  