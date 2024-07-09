@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Customers List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a class="btn btn-primary" href="{{ url('admin/customers/add') }}">Add New Customer</a>
						</div>

						<table class="table datatable">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Name</th>
						      <th scope="col">Contact Number</th>
						      <th scope="col">Address</th>
						      <th scope="col">Doctor Name</th>
						      <th scope="col">Doctor Address</th>
						      <th scope="col">Create Date</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Delete</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@foreach($getRecord as $value)
						    <tr>
						      <th scope="row">{{ $value->id }}</th>
						      <td>{{ $value->name }}</td>
						      <td>{{ $value->contact_number }}</td>
						      <td>{{ $value->address }}</td>
						      <td>{{ $value->doctor_name }}</td>
						      <td>{{ $value->doctor_address }}</td>
						      <td>{{ date('d-m-y H:i:s', strtotime($value->created_at)) }}</td>
						      <td><a href="{{ url('admin/customers/edit/'.$value->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> </td>
						      <td><a href="{{ url('admin/customers/delete/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="bi bi-trash"></i></a></td>
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