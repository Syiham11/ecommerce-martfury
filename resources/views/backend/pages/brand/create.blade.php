@extends('backend.layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<form class="card" action="{{ route('brand.store') }}" enctype="multipart/form-data" method="post">
				@csrf
				<div class="card-header">
					<h3 class="card-title ">Add Brand</h3>
					<div class="card-options">
						<a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-primary"  data-toggle="tooltip" data-placement="right" title="" data-original-title="Go To Back"><i class="fa fa-mail-reply"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Brand Name</label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') ? old('name') : '' }}">
								@if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
							</div>
						</div>
						<div class="col-md-6">
						</div>
					</div>
				</div>
				<div class="card-footer text-right">
					<a href="{{ route('brand.index') }}"  class="btn btn-primary">Cancel</a>
					<button type="submit" class="btn btn-primary">Create Brand</button>
				</div>
			</form>
		</div>
	</div>

@endsection

@section('after-scripts')

@endsection