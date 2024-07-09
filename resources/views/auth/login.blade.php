@extends('layouts.app')

@section('content')

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">

                    @include('_message')

                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3" action="{{ url('login/post') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="col-12">
                      <label class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true">
                        <label class="form-check-label">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Want to register a new account? <a href="{{ url('register') }}">Register Account</a></p>
                      <p class="small mb-0">Want to Forgot Password? <a href="{{ url('forgot') }}">Forgot Password</a></p>
                    </div>
                  </form>

                </div>
              </div>

@endsection

              