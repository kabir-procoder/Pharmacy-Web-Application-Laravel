@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Medicine List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a class="btn btn-primary" href="{{ url('admin/medicine/add') }}">Add New Medicine</a>
							<a class="btn btn-info text-white" href="{{ url('admin/medicine/trash') }}">View Trash</a>
						</div>

						<table class="table datatable">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Name</th>
						      <th scope="col">Packing</th>
						      <th scope="col">Generic Name</th>
						      <th scope="col">Supplier Name</th>
						      <th scope="col">Create Date</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Trash</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@foreach($getRecord as $value)
						    <tr>
						      <th scope="row">{{ $value->id }}</th>
						      <td>{{ $value->name }}</td>
						      <td>{{ $value->packing }}</td>
						      <td>{{ $value->generic_name }}</td>
						      <td>{{ $value->supplier_name }}</td>
						      <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
						      <td><a href="{{ url('admin/medicine/edit/'.$value->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> </td>
						      <td><a href="{{ url('admin/medicine/delete/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to trush this item?');"><i class="bi bi-trash2"></i></a></td>
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