{{ Form::open(array('url' => '/register')) }}
	{{Form::label('email', 'Email')}}
	{{ Form::text('email')}}
	<br/>
	{{ Form::label('name', 'Name')}}
	{{ Form::text('name')}}
	<br/>
	{{ Form::label('city', 'City')}}
	{{ Form::text('city')}}
	<br/>
	{{Form::submit('Save')}}
{{ Form::close() }}