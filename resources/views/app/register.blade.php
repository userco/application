<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  </head>
  <body>
	<div class="container">
		@if ($errors->any())
			  <div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					  <li>{{ $error }}</li>
					@endforeach
				</ul>
			  </div><br />
		@endif
		{{ Form::open(array('url' => '/register','id' => 'form','onsubmit'=>'validateForm()')) }}
			{{Form::label('email', 'Email')}}
			{{ Form::text('email', null, array('id' => 'email'))}}
			<br/>
			{{ Form::label('name', 'Name')}}
			{{ Form::text('name', null, array('id' => 'name'))}}
			<br/>
			{{ Form::label('city', 'City')}}
			{{ Form::text('city', null, array('id' => 'city'))}}
			<br/>
			{{Form::submit('Save', null, array('class' => 'btn btn-primary', 'id' => 'submit', 'onclick'=>"validateForm()"))}}
		{{ Form::close() }}
		
		{{ Html::script('js/validation.js') }}
		{{ Html::script('js/ajax_post_submit.js') }}
	</div>
  </body>
</html>