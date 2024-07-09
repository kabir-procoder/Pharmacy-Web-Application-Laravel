@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Invoices List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">

				@include('_message')

				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a class="btn btn-primary" href="{{ url('admin/invoices/add') }}">Add New Invoices</a>
							<a class="btn btn-info text-white" href="{{ url('admin/invoices/trash') }}">View Trash</a>
						</div>

						<table class="table datatable">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Customer Name</th>
						      <th scope="col">Total Amount</th>
						      <th scope="col">Total Discount</th>
						      <th scope="col">Create Date</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Trash</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@foreach($getRecord as $value)
						    <tr>
						      <th scope="row">{{ $value->id }}</th>
						      <td>{{ !empty($value->getCustomerName->name) ? $value->getCustomerName->name : '' }}</td>

						      <td>{{ $value->total_amount }}</td>
						      <td>{{ $value->total_discount }}</td>
						      <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
						      <td><a href="{{ url('admin/invoices/edit/'.$value->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> </td>
						      <td><a href="{{ url('admin/invoices/trash/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to trush this item?');"><i class="bi bi-trash2"></i></a></td>
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