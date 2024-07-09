@extends('admin.layouts.app')
@section('content')

	<div class="pagetitle">
		<h1>Seo List</h1>
	</div>

	<section class="section">
		<div class="row">
			<div class="col-md-12">

				@include('_message')

				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Seo List</h5>

						<form action="{{ url('admin/seo') }}" method="post" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Meta Title <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" value="{{ @$getRecord[0]->meta_title ? $getRecord[0]->meta_title : '' }}">
			                      <span style="color: red;">{{ $errors->first('meta_title') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Meta Keyword <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <textarea type="text" name="meta_keyword" class="form-control" rows="3" placeholder="Enter Meta Keyword">{{ @$getRecord[0]->meta_keyword ? $getRecord[0]->meta_keyword : '' }}</textarea>
			                      <span style="color: red;">{{ $errors->first('meta_description') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Meta Description <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <textarea type="text" name="meta_description" class="form-control" rows="3" placeholder="Enter Meta Description">{{ @$getRecord[0]->meta_description ? $getRecord[0]->meta_description : '' }}</textarea>
			                      <span style="color: red;">{{ $errors->first('meta_description') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Copyright Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="copyright_name" class="form-control" placeholder="Enter Copyright Name" value="{{ @$getRecord[0]->copyright_name ? $getRecord[0]->copyright_name : '' }}">
			                      <span style="color: red;">{{ $errors->first('copyright_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Developer Name <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="text" name="developer_name" class="form-control" placeholder="Enter Developer Name" value="{{ @$getRecord[0]->developer_name ? $getRecord[0]->developer_name : '' }}">
			                      <span style="color: red;">{{ $errors->first('developer_name') }}</span>
			                    </div>
			                </div>

			                <div class="form-group row mb-4">
			                    <label class="col-sm-2 col-form-label">Developer URL <span style="color: red;">*</span></label>
			                    <div class="col-sm-10">
			                      <input type="url" name="developer_url" class="form-control" placeholder="Enter Developer URL" value="{{ @$getRecord[0]->developer_url ? $getRecord[0]->developer_url : '' }}">
			                      <span style="color: red;">{{ $errors->first('developer_url') }}</span>
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