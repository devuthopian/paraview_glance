@extends('frontend.layouts.app')

@section('content')

        <div class="login-page">
            <div class="login-inner">
                <div class="form">
                    <div class="login-logo">
                        <a href="{{ route('frontend.index') }}""><img style="width:100px;" src="/paraview_glance/storage/app/public/img/logo/{{settings()->logo}}"></a>
                    </div>
                    {{ Form::open(['route' => 'frontend.auth.login', 'class' => '']) }}
                        <div class="field-cls">
                             {{ Form::input('email', 'email', null, ['class' => '', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }}
                        </div>
                        <div class="field-cls">
                              {{ Form::input('password', 'password', null, ['class' => 'form-control',  'id' => 'password-field', 'placeholder' => trans('validation.attributes.frontend.register-user.password')]) }}
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                        </div>
                        <div class="forget-password">
                            {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
                        </div>
                        <div class="Remember-cls">
                            <p> {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}</p> 
                        </div>
                        <div class="submit-btn">
                             {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => '', 'style' => '']) }}

                        </div>
                     {{ Form::close() }}
                </div>
                <div class="register-cls">
                    {{ link_to_route('frontend.auth.register', trans('navs.frontend.register')) }}
                </div>
            </div>
        </div>
    </main>    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
 
        <script type="text/javascript">
        $(".toggle-password").click(function() {

              $(this).toggleClass("fa-eye fa-eye-slash");
              var input = $($(this).attr("toggle"));
              if (input.attr("type") == "password") {
                input.attr("type", "text");
              } else {
                input.attr("type", "password");
              }
        });
    </script>             
@endsection