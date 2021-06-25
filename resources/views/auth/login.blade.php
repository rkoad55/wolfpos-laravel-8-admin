{{-- Extends layout --}}
@extends('layout.fullwidth')


 
{{-- Content --}}
@section('content')
	<div class="col-md-6">
      <div class="authincation-content">
          <div class="row no-gutters">
              <div class="col-xl-12">
                  <div class="auth-form">
                      <h4 class="text-center mb-4">Sign in your account</h4>
                      <form  method="POST" action="{{ route('login') }}">
                      @csrf
                          <div class="form-group">
                              <label class="mb-1"><strong>Email</strong></label>
                              <input type="email" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group">
                              <label class="mb-1"><strong>Password</strong></label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                          </div>
                          <div class="form-row d-flex justify-content-between mt-4 mb-2">
                              <div class="form-group">
                                 <div class="custom-control custom-checkbox ml-1">
                                 <input class="custom-control-input" type="checkbox" name="remember" id="basic_checkbox_1" {{ old('remember') ? 'checked' : '' }}>


            <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
          </div>
                              </div>
                              <div class="form-group">
                                  <a href="#">Forgot Password?</a>
                              </div>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                          </div>
                      </form>
                      <div class="new-account mt-3">
                          <p>Don't have an account? <a class="text-primary" href="#">Sign up</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php
  
  $action = __FUNCTION__; ?>
@endsection