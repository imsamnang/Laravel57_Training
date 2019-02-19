@extends('layouts.backend.auth_master')

@section('pagetitle','Login Home Page')

@push('css')
  {{-- expr --}}
@endpush

@section('haveaccount','Need and account')
@section('loginregister')
  <a href="{{route('register')}}" class="btn btn-danger">Create New Account</a> 
@endsection

@section('auth-content')

  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
      <h1 class="txt-color-red login-header-big">SmartAdmin</h1>
      <div class="hero">
          <div class="pull-left login-desc-box-l">
              <h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
              <div class="login-app-icons">
                  <a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
                  <a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
              </div>
          </div>                        
          <img src="{{asset('assets/backend/img/demo/iphoneview.png')}}" class="pull-right display-image" alt="" style="width:210px">
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h5 class="about-heading">About SmartAdmin - Are you up to date?</h5>
              <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
              </p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h5 class="about-heading">Not just your average template!</h5>
              <p>
                  Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
              </p>
          </div>
      </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
      <div class="well no-padding">
          <form action="{{ route('login') }}" id="login-form" class="smart-form client-form" method="POST">
            {{csrf_field()}}
              <header>
                  Sign In
              </header>
              <fieldset>                                
                  <section>
                    <label class="label">E-mail</label>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                      <input type="email" name="email" placeholder="{{ $errors->has('email') ? ' is-invalid' : '' }}">
                      <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b>
                      @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </label>
                  </section>
                  <section>
                    <label class="label">Password</label>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                      <input type="password" name="password" placeholder="{{ $errors->has('password') ? ' is-invalid' : '' }}>
                        <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b>
                      @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif                          
                    </label>
                    <div class="note">
                        <a href="forgotpassword.html">Forgot password?</a>
                    </div>
                  </section>
                  <section>
                      <label class="checkbox">
                          <input type="checkbox" name="remember" checked="">
                          <i></i>Stay signed in</label>
                  </section>
              </fieldset>
              <footer>
                  <button type="submit" class="btn btn-primary">
                      Sign in
                  </button>
              </footer>
          </form>
      </div>                    
      <h5 class="text-center"> - Or sign in using -</h5>
          <ul class="list-inline text-center">
              <li>
                  <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                  <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                  <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
              </li>
          </ul>
  </div>

@endsection

@push('js')
  <script type="text/javascript">
      runAllForms();

      $(function() {
          // Validation
          $("#login-form").validate({
              // Rules for form validation
              rules : {
                  email : {
                      required : true,
                      email : true
                  },
                  password : {
                      required : true,
                      minlength : 3,
                      maxlength : 20
                  }
              },

              // Messages for form validation
              messages : {
                  email : {
                      required : 'Please enter your email address',
                      email : 'Please enter a VALID email address'
                  },
                  password : {
                      required : 'Please enter your password'
                  }
              },

              // Do not change code below
              errorPlacement : function(error, element) {
                  error.insertAfter(element.parent());
              }
          });
      });
  </script>
@endpush
 