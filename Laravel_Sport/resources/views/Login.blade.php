@extends('Layouts.app')

@section('content')

{!! Form::open(['url' => 'Home']) !!}
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<h3>Login</h3>
		<div class="form-group">
			{{Form::label('email', 'email')}}
			{{Form::email('email', '' ,['class' => 'form-control', 'placeholder' => 'Email'])}}
		</div>
		<div class="form-group">
			{{Form::label('password', 'password')}}
			<br>
			{{Form::password('password', '' ,['class' => 'form-control'])}}
		</div>

		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}
</div>
	<div class="col-md-3"></div>
</div>
@endsection