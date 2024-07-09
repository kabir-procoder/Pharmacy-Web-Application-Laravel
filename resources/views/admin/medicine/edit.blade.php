@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Medicine Edit</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				{{-- @include('_message') --}}
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Medicine Edit</h5>

						<form action="{{ url('admin/medicine/edit/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $getRecord->name }}">
			                      <span style="color: red;">{{ $errors->first('name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Packing <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="packing" class="form-control" placeholder="Enter Packing" value="{{ $getRecord->packing }}">
			                      <span style="color: red;">{{ $errors->first('packing') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Generic Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="generic_name" class="form-control" placeholder="Enter Packing" value="{{ $getRecord->generic_name }}">
			                      <span style="color: red;">{{ $errors->first('generic_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Supplier Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="supplier_name" class="form-control" placeholder="Enter Supplier Name" value="{{ $getRecord->supplier_name }}">
			                      <span style="color: red;">{{ $errors->first('supplier_name') }}</span>
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