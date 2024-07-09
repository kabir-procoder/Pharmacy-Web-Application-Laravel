@extends('layouts.app')

@section('content')

              {{-- Form Start --}}
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">

                    @include('_message')

                    <h5 class="card-title text-center pb-0 fs-4">Forgot Your Password</h5>
                    <p class="text-center small">Enter your email to forgot password</p>
                  </div>

                  <form class="row g-3" action="{{ url('forgot/post') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="col-12">
                      <label class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Forgot</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Login? <a href="{{ url('/') }}">Login account</a></p>
                    </div>

                  </form>

                </div>
              </div>
              {{-- Form End --}}

@endsection

             