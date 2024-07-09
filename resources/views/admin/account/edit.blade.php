@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Account Edit</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">

				@include('_message')

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Account Edit</h5>

						<form action="{{ url('admin/account/edit/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="name" class="form-control" value="{{ $getRecord->name }}">
			                      <span style="color: red;">{{ $errors->first('generic_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Email <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="email" class="form-control" value="{{ $getRecord->email }}">
			                      <span style="color: red;">{{ $errors->first('supplier_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Image <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="file" name="image" class="form-control">
			                      @if($getRecord->image)
			                        <img width="100" height="100" src="{{ url('public/img/user/'.$getRecord->image) }}">
			                      @endif
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Role <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <select class="form-control" name="is_role">
			                      	<option {{ $getRecord->is_role == 0 ? 'selected' : '' }} value="0">Subscriber</option>
			                      	<option {{ $getRecord->is_role == 1 ? 'selected' : '' }} value="1">Admin</option>
			                      </select>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Password <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="password" name="password" class="form-control">
			                      <p style="color: orange; font-size: 14px;">(Leave blank if you are not changing the password)</p>
			                      <span style="color: red;">{{ $errors->first('supplier_name') }}</span>
			                    </div>
			                </div>


			                <div class="card-footer">
			                    <button type="submit" name="add_to_update" class="btn btn-primary" value=""> Update </button>
			                </div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>







@endsection