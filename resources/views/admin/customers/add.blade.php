@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Add Customer</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				{{-- @include('_message') --}}
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Customer</h5>

						<form action="{{ url('admin/customers/add') }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="name" class="form-control" placeholder="Enter Name" value="">
			                      <span style="color: red;">{{ $errors->first('name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Contact Number <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="number" name="contact_number" class="form-control" placeholder="Enter Contact Number" value="">
			                      <span style="color: red;">{{ $errors->first('contact_number') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Address <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <textarea type="text" name="address" class="form-control" rows="3" placeholder="Enter Address"></textarea>
			                      <span style="color: red;">{{ $errors->first('address') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Doctor Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="doctor_name" class="form-control" placeholder="Enter Doctor Name" value="">
			                      <span style="color: red;">{{ $errors->first('doctor_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Doctor Addres <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <textarea type="text" name="doctor_address" class="form-control" rows="3" placeholder="Enter Doctor Address"></textarea>
			                      <span style="color: red;">{{ $errors->first('doctor_address') }}</span>
			                    </div>
			                </div>

			                <div class="card-footer">
			                    <button type="submit" name="add_to_update" class="btn btn-primary" value=""> Submit </button>
			                </div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>







@endsection