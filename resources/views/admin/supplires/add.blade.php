@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Suppliers Add</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Suppliers Add</h5>

						<form action="{{ url('admin/supplires/add') }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Supplires Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="supplires_name" class="form-control" placeholder="Enter Supplires Name" value="">
			                      <span style="color: red;">{{ $errors->first('supplires_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Supplires Email <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="email" name="supplires_email" class="form-control" placeholder="Enter Supplires Email" value="">
			                      <span style="color: red;">{{ $errors->first('supplires_email') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Supplires Number <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="number" name="supplires_number" class="form-control" placeholder="Enter Supplires Number" value="">
			                      <span style="color: red;">{{ $errors->first('supplires_number') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Address <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="address" class="form-control" placeholder="Enter Address" value="">
			                      <span style="color: red;">{{ $errors->first('address') }}</span>
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