@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Medicine Stock Trash-Bin List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a class="btn btn-primary" href="{{ url('admin/medicines_stock') }}">Back to List</a>
						</div>

						<table class="table datatable">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Medicine Name</th>
						      <th scope="col">Batch Id</th>
						      <th scope="col">Expire Date</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">MRP</th>
						      <th scope="col">Rate</th>
						      <th scope="col">Create Date</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Trash</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@foreach($getRecord as $value)
						  	<tr>
						      <th scope="row">{{ $value->id }}</th>
						      <td>{{ !empty($value->getMedicineName->name) ? $value->getMedicineName->name : '' }}</td>
						      <td>{{ $value->batch_id }}</td>
						      <td>{{ $value->expire_date }}</td>
						      <td>{{ $value->quantity }}</td>
						      <td>{{ $value->mrp }}</td>
						      <td>{{ $value->rate }}</td>
						      <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
						      <td><a href="{{ url('admin/medicines_stock/restore/'.$value->id) }}" class="btn btn-primary"><i class="bi bi-recycle"></i></a> </td>
						      <td><a href="{{ url('admin/medicines_stock/delete/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete this item parmanently?');"><i class="bi bi-trash2"></i></a></td>
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