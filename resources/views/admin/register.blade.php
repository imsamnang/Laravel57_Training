@extends('layouts.backend.auth_master')

@section('pagetitle','Register Home Page')

@push('css')
  {{-- expr --}}
@endpush

@section('haveaccount','Already registered?')
@section('loginregister')
  <a href="{{route('login')}}" class="btn btn-danger">Sign In</a> 
@endsection

@section('auth-content')

  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 hidden-xs hidden-sm">
      <h1 class="txt-color-red login-header-big">SmartAdmin</h1>
      <div class="hero">
          <div class="pull-left login-desc-box-l">
              <h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
              <div class="login-app-icons">
                  <a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
                  <a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
              </div>
          </div>                            
          <img src="{{asset('assets/backend/img/demo/iphoneview.png')}}" alt="" class="pull-right display-image" style="width:210px">                            
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
  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    <div class="well no-padding">
      <form action="{{route('register')}}" id="smart-form-register" class="smart-form client-form" method="POST">
        {{csrf_field()}}
        <header>
            Registration is FREE*
        </header>
          <fieldset>
            <section>
              <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="text" name="name" placeholder="name {{ $errors->has('name') ? ' is-invalid' : '' }}">
                  <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                  @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
              </label>
            </section>            
            <section>
              <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="text" name="username" placeholder="Username {{ $errors->has('username') ? ' is-invalid' : '' }}">
                  <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                  @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                  @endif                  
              </label>
            </section>
            <section>
                <label class="input"> <i class="icon-append fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email address {{ $errors->has('email') ? ' is-invalid' : '' }}">
                    <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif                    
                </label>
            </section>
            <section>
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Password {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password">
                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif                    
                </label>
            </section>
            <section>
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="passwordConfirm" placeholder="Confirm password">
                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
            </section>
          </fieldset>
          {{-- <fieldset> --}}
{{--               <div class="row">
                  <section class="col col-6">
                      <label class="input">
                          <input type="text" name="firstname" placeholder="First name">
                      </label>
                  </section>
                  <section class="col col-6">
                      <label class="input">
                          <input type="text" name="lastname" placeholder="Last name">
                      </label>
                  </section>
              </div> --}}
{{--               <div class="row">
                  <section class="col col-6">
                      <label class="select">
                          <select name="gender">
                              <option value="0" selected="" disabled="">Gender</option>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                              <option value="3">Prefer not to answer</option>
                          </select> <i></i> </label>
                  </section>
                  <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-calendar"></i>
                          <input type="text" name="request" placeholder="Request activation on" class="datepicker" data-dateformat='dd/mm/yy'>
                      </label>
                  </section>
              </div>
              <section>
                  <label class="checkbox">
                      <input type="checkbox" name="subscription" id="subscription">
                      <i></i>I want to receive news and special offers</label>
                  <label class="checkbox">
                      <input type="checkbox" name="terms" id="terms">
                      <i></i>I agree with the <a href="#" data-toggle="modal" data-target="#myModal"> Terms and Conditions </a></label>
              </section> --}}
          {{-- </fieldset> --}}
          <footer>
              <button type="submit" class="btn btn-primary">
                  Register
              </button>
          </footer>
          <div class="message">
              <i class="fa fa-check"></i>
              <p>
                  Thank you for your registration!
              </p>
          </div>
      </form>
    </div>
    <p class="note text-center">*FREE Registration ends on October 2015.</p>
    <h5 class="text-center">- Or sign in using -</h5>
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
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
        </div>
        <div class="modal-body custom-scroll terms-body">                        
          <div id="left">
            <h1>SMARTADMIN TERMS & CONDITIONS TEMPLATE</h1>
            <h2>Introduction</h2>
            <p>These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.</p>
            <p>[You must be at least [18] years of age to use this website.  By using this website [and by agreeing to these terms and conditions] you warrant and represent that you are at least [18] years of age.]</p>
            <h2>License to use website</h2>
            <p>Unless otherwise stated, [NAME] and/or its licensors own the intellectual property rights in the website and material on the website.  Subject to the license below, all these intellectual property rights are reserved.</p>
            <p>You may view, download for caching purposes only, and print pages [or [OTHER CONTENT]] from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
              </button>
              <button type="button" class="btn btn-primary" id="i-agree">
                  <i class="fa fa-check"></i> I Agree
              </button>                    
              <button type="button" class="btn btn-danger pull-left" id="print">
                  <i class="fa fa-print"></i> Print
              </button>
          </div>
        </div><!-- /.modal-content -->
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

@endsection

@push('js')
  <script type="text/javascript">
      runAllForms();            
      // Model i agree button
      $("#i-agree").click(function(){
          $this=$("#terms");
          if($this.checked) {
              $('#myModal').modal('toggle');
          } else {
              $this.prop('checked', true);
              $('#myModal').modal('toggle');
          }
      });            
      // Validation
      $(function() {
        // Validation
        $("#smart-form-register").validate({
            // Rules for form validation
            rules : {
                username : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                },
                passwordConfirm : {
                    required : true,
                    minlength : 3,
                    maxlength : 20,
                    equalTo : '#password'
                },
                firstname : {
                    required : true
                },
                lastname : {
                    required : true
                },
                gender : {
                    required : true
                },
                terms : {
                    required : true
                }
            },
            // Messages for form validation
            messages : {
                login : {
                    required : 'Please enter your login'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                },
                passwordConfirm : {
                    required : 'Please enter your password one more time',
                    equalTo : 'Please enter the same password as above'
                },
                firstname : {
                    required : 'Please select your first name'
                },
                lastname : {
                    required : 'Please select your last name'
                },
                gender : {
                    required : 'Please select your gender'
                },
                terms : {
                    required : 'You must agree with Terms and Conditions'
                }
            },

            // Ajax form submition
            submitHandler : function(form) {
                $(form).ajaxSubmit({
                    success : function() {
                        $("#smart-form-register").addClass('submited');
                    }
                });
            },
            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

      });
  </script>
@endpush
