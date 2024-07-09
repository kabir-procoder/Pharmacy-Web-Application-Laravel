@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Medicine Stock Add</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Medicine Stock Add</h5>

						<form action="{{ url('admin/medicines_stock/add') }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Medicine Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                    	<select class="form-control" name="medicines_id">
			                    		<option value="">Select Medicine Name</option>
			                    		@foreach($getRecord as $value)
			                    		<option value="{{ $value->id }}">{{ $value->name }}</option>
			                    		@endforeach
			                    	</select>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Batch Id <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="batch_id" class="form-control" placeholder="Enter Batch Id" value="">
			                      <span style="color: red;">{{ $errors->first('batch_id') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Expire Date <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="date" name="expire_date" class="form-control" placeholder="Enter Expire Date" value="">
			                      <span style="color: red;">{{ $errors->first('expire_date') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Quantity <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity" value="">
			                      <span style="color: red;">{{ $errors->first('quantity') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">MRP <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="mrp" class="form-control" placeholder="Enter MRP" value="">
			                      <span style="color: red;">{{ $errors->first('mrp') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Rate <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="rate" class="form-control" placeholder="Enter Rate" value="">
			                      <span style="color: red;">{{ $errors->first('rate') }}</span>
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