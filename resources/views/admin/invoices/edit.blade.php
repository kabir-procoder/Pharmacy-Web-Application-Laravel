@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Invoice Edit</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">

				@include('_message')
				
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Invoice Edit</h5>

						<form action="{{ url('admin/invoices/edit/'.$editRecord->id) }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Customers Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                    	<select class="form-control" name="customers_id">
			                    		<option value="">Select Customer</option>
			                    		@foreach($getRecord as $value)
			                    		<option {{ $value->id == $editRecord->customers_id ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->name }}</option>
			                    		@endforeach
			                    	</select>
			                    </div>
			                </div>

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Net Total <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="net_total" class="form-control" placeholder="Enter Net Total" value="{{ $editRecord->net_total }}">
			                      <span style="color: red;">{{ $errors->first('net_total') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Invoice Date <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="date" name="invoices_date" class="form-control" placeholder="Enter Invoice Date" value="{{ $editRecord->invoices_date }}">
			                      <span style="color: red;">{{ $errors->first('invoices_date') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Total Discunt <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="total_discount" class="form-control" placeholder="Enter Total Discunt" value="{{ $editRecord->total_discount }}">
			                      <span style="color: red;">{{ $errors->first('total_discount') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Total Amount <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="total_amount" class="form-control" placeholder="Enter Total Amount" value="{{ $editRecord->total_amount }}">
			                      <span style="color: red;">{{ $errors->first('total_amount') }}</span>
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