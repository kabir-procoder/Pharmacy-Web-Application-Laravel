@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Purchase List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a class="btn btn-primary" href="{{ url('admin/purchases/add') }}">Add New Purchase</a>
							<a class="btn btn-info text-white" href="{{ url('admin/purchases/trash') }}">View Trash</a>
						</div>

						<table class="table datatable">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Supplires Name</th>
						      <th scope="col">Invoices Id</th>
						      <th scope="col">Voucher Number</th>
						      <th scope="col">Purchase Date</th>
						      <th scope="col">Total Amount</th>
						      <th scope="col">Payment Status</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Trash</th>
						    </tr>
						  </thead>
						  <tbody>
						  	
						  	@foreach($getRecord as $value)
						  	<tr>
						      <th scope="row">{{ $value->id }}</th>
						      <td>{{ $value->getSuppliersName->supplires_name }}</td>
						      <td>{{ $value->invoices_id }}</td>
						      <td>{{ $value->voucher_number }}</td>
						      <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
						      <td>{{ $value->total_amount }}</td>
						      <td>
					      		@if($value->payment_status == 1) Pending
					      		@elseif($value->payment_status == 2) Accept
					      		@elseif($value->payment_status == 3) Cancel
						      	@endif
						       </td>
						      
						      <td><a href="{{ url('admin/purchases/edit/'.$value->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> </td>
						      <td><a href="{{ url('admin/purchases/trash/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to trush this item?');"><i class="bi bi-trash2"></i></a></td>
						    </tr>
						    @endforeach

						  </tbody>
						</table>

						{!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

					</div>
				</div>
			</div>
		</div>
	</section>







@endsection