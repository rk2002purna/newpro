<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Contact Us</h4>
          </div>
          <!-- /.module-heading -->
          
             @php
         $setting = App\Models\SiteSetting::find(1);
          @endphp

          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>{{ $setting->company_name }}, {{ $setting->company_address }}</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>{{ $setting->phone_one }} or<br>
                   {{ $setting->phone_two }}</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#">{{ $setting->email }}</a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Customer Service</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="{{ route('login') }}" title="Contact us">My Account</a></li>
              <li><a href="{{ route('my.orders') }}" title="About us">Order History</a></li>
              <li class="last"><a href="{{ route('home.blog') }}" title="Where is my order?">Help Center</a></li>
              <li><a title="Information" href="{{ route('home.blog') }}">Customer Service</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">My projects</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="https://ramakrishnacv.netlify.app/">My Resume</a></li>
              <li><a title="Addresses" href="https://fashionmall.ml/">similar wesite</a></li>
              <li><a title="Addresses" href="https://newskabap.web.app/">Other wesite(News App)</a></li>
              <li class="last"><a title="Orders History" href="#">All Our blog</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        
      </div>
    </div>
  </div>
  <div class="copyright-bar">
    <div class="container">
      <div class="col-xs-12 col-sm-6 no-padding social">
        <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="{{ $setting->facebook }}" title="Facebook"></a></li>

          
          
          <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="{{ $setting->linkedin }}" title="Linkedin"></a></li>

        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="{{ asset('frontend/assets/images/payments/1.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/payments/2.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/payments/3.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/images/payments/5.png') }}" alt=""></li>
          </ul>
        </div>
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div>
</footer>