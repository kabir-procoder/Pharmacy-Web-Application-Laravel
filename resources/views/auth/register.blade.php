@extends('layouts.app')

@section('content')

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">

                    @include('_message')

                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3" action="{{ url('register/post') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="col-12">
                      <label class="form-label">Username</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Your Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="email" name="email" class="form-control" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{ url('/') }}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

@endsection

              