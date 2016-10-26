@extends('masterchurch')
@section('title', 'Account Profile')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-3">
			<div class="well">
				Photo
			</div>
			<div class="well">
				<h3>Joined</h3>
				<p>
					{{ Auth::user()->created_at->diffForHumans() }}
				</p>
				<h3>Last Login</h3>
				<p>
					{{ Auth::user()->updated_at->diffForHumans() }}
				</p>
			</div>
		</div>
		<div class="col-sm-12 col-sm-9">
			<div class="well">
				<h2>Account Settings</h2>
				@include('errors.list')
				<form action="{{ url('storeContacts') }}" method="POST" class="form-horizontal" role="form">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
								@if($errors->has('name'))
									<p class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</p>
								@endif
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">email</label>
							<div class="col-sm-10">
								<input type="text" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
								@if($errors->has('email'))
									<p class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</p>
								@endif								
							</div>
						</div>	
						<div class="form-group">
							<label for="phone" class="col-sm-2 control-label">Phone number</label>
							<div class="col-sm-10">
								<input type="text" name="phone" id="phone" class="form-control" value="{{ Auth::user()->phone }}">
								@if($errors->has('phone'))
									<p class="help-block">
										<strong>{{ $errors->first('phone') }}</strong>
									</p>
								@endif								
							</div>
						</div>											
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
				</form>	

				<h3>Social Media</h3>
				<form action="#" method="POST" class="form-horizontal" role="form">
						<div class="form-group">
							<label for="facebook" class="col-sm-2 control-label">Facebook</label>
							<div class="col-sm-10">
								<input type="text" name="facebook" id="facebook" class="form-control" placeholder="https://">
							</div>
						</div>	
						<div class="form-group">
							<label for="twitter" class="col-sm-2 control-label">Twitter</label>
							<div class="col-sm-10">
								<input type="text" name="twitter" id="twitter" class="form-control" placeholder="https://">
							</div>
						</div>	
						<div class="form-group">
							<label for="instagram" class="col-sm-2 control-label">Instagram</label>
							<div class="col-sm-10">
								<input type="text" name="instagram" id="instagram" class="form-control" placeholder="https://">
							</div>
						</div>	
						<div class="form-group">
							<label for="blog" class="col-sm-2 control-label">Blog</label>
							<div class="col-sm-10">
								<input type="text" name="blog" id="blog" class="form-control" placeholder="https://">
							</div>
						</div>																								
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
				</form>				

			</div>
			<div class="well">
				<h2>Church(es)</h2>
			</div>
		</div>
	</div>
</div>

@endsection
