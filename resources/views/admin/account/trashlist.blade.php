@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Account Trash-Bin List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">
				@include('_message')
				<div class="card">
					<div class="card-body">
						<div class="card-title">
							<a class="btn btn-primary" href="{{ url('admin/account/') }}">Back to List</a>
						</div>

						<table class="table datatable">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Image</th>
						      <th scope="col">Name</th>
						      <th scope="col">Email</th>
						      <th scope="col">Role</th>
						      <th scope="col">Create Date</th>
						      <th scope="col">Edit</th>
						      <th scope="col">Delete</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@foreach($getRecord as $value)
						    <tr>
						      <th scope="row">{{ $value->id }}</th>
						      <td>
			                      @if(!empty($value->image))
				                      <img src="{{ url('public/img/user/'.$value->image) }}" style="height: 50px; width: 50px; object-fit: cover; border-radius: 50px;"> 
			                      @endif
		                      </td>
						      <td>{{ $value->name }}</td>
						      <td>{{ $value->email }}</td>
						      <td>
					      		@if($value->is_role == 0) Subscriber
					      		@elseif($value->is_role == 1) Admin
						      	@endif
						       </td>
						      <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
						      <td><a href="{{ url('admin/account/restore/'.$value->id) }}" class="btn btn-primary"><i class="bi bi-recycle"></i></a> </td>
						      <td><a href="{{ url('admin/account/delete/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to parmanent delete this item?');"><i class="bi bi-trash"></i></a></td>
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