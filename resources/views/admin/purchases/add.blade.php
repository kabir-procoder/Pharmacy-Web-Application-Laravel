@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Purchase Add</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Purchase Add</h5>

						<form action="{{ url('admin/purchases/add') }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Supplires Id <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                    	<select class="form-control" name="supplires_id">
			                    		<option value="">Select Supplires</option>
			                    		@foreach($getSupplires as $value)
			                    		<option value="{{ $value->id }}">{{ $value->supplires_name }}</option>
			                    		@endforeach
			                    	</select>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Invoices ID <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                    	<select class="form-control" name="invoices_id">
			                    		<option value="">Select Invoices</option>
			                    		@foreach($getInvoices as $value)
			                    		<option value="{{ $value->id }}">{{ $value->id }}</option>
			                    		@endforeach
			                    	</select>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Voucher Number <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="voucher_number" class="form-control" placeholder="Enter Voucher Number" value="">
			                      <span style="color: red;">{{ $errors->first('voucher_number') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Purchase Date <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="date" name="purchase_date" class="form-control" placeholder="Enter Purchase Date" value="">
			                      <span style="color: red;">{{ $errors->first('	purchase_date') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Total Amount <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="total_amount" class="form-control" placeholder="Enter Total Amount" value="">
			                      <span style="color: red;">{{ $errors->first('total_amount') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Payment Status <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <select class="form-control" name="payment_status">
			                      	<option value="">Select Payment Status</option>
			                      	<option value="1">Pending</option>
			                      	<option value="2">Accept</option>
			                      	<option value="3">Cancel</option>
			                      </select>
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