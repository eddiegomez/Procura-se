@extends('layouts.app')
<style type="text/css">
#tt{
  background: url("/images/login_1.jpg");
}
</style>
@section('content')

<body>
  <div class="container-scroller" id="tt">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <div class="header">
                <center><h4 class="title" style="color: gray">PROCURA-SE</h4></center>                
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label class="label">Email</label>
                  <label class="label">{{ __('E-Mail Address') }}</label>
                  <div class="input-group">
                    <input type="mail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                       <span class="invalid-feedback" role="alert">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    @endif
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">{{ __('Password') }}</label>
                  <div class="input-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="**********">
                    @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    </label>
                  </div>
                  <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">{{ __('Forgot Your Password?') }}</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-block g-login">
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Ainda não está registado ?</span>
                  <a href="register.html" class="text-black text-small">Crie uma conta</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Condicoes</a>
              </li>
              <li>
                <a href="#">Ajuda</a>
              </li>
              <li>
                <a href="#">Termos</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Procura-se. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
@endsection