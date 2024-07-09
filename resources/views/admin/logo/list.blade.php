@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Logo</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">

				@include('_message')

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Logo</h5>

						<form action="{{ url('admin/logo/post') }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="name" class="form-control" value="{{ @$getRecord[0]->name ? $getRecord[0]->name : '' }}">
			                      <span style="color: red;">{{ $errors->first('name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Logo <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="file" name="image" class="form-control">
			                      @if($getRecord[0]->image)
			                        <img width="100" height="60" style="object-fit: cover; background: #8A8A8A; margin-top: 5px;" src="{{ url('public/img/logo/'.$getRecord[0]->image) }}">
			                      @endif
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Favicon <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="file" name="favicon" class="form-control">
			                      @if($getRecord[0]->favicon)
			                        <img width="100" height="60" style="object-fit: cover; background: #8A8A8A; margin-top: 5px;" src="{{ url('public/img/favicon/'.$getRecord[0]->favicon) }}">
			                      @endif
			                    </div>
			                </div>

			                <input type="hidden" name="id" value="{{ isset($getRecord[0]->id) ? $getRecord[0]->id : '' }}">

			                <div class="card-footer">
			                     <button type="submit" name="add_to_update" class="btn btn-primary" value="{{ @count($getRecord)>0 ? 'Update' : 'Add' }}"> {{ @count($getRecord)>0 ? 'Update' : 'Add' }} </button>
			                </div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>







@endsection