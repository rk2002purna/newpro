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
                <h3 class="text-center"><span class="text-danger">Hi..</span><strong>{{ Auth::user()->name }}</strong>Welcome to Lalitha fashions</h3>
            </div><!--//end col md 6-->
            </div>

        </div><!--//end row-->

    </div>

</div>

@endsection