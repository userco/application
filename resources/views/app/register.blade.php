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
	<h1> Registration Form</h2>
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
		<table>
		<tr>
		<td>	{{Form::label('email', 'Email')}} </td>
		<td>	{{ Form::text('email', null, array('id' => 'email'))}} </td>
		</tr>
		<tr>
		<td>	{{ Form::label('name', 'Name')}}  </td>
		<td>	{{ Form::text('name', null, array('id' => 'name'))}}    </td>
		</tr>
		<tr>
		<td>	{{ Form::label('city', 'City')}}  </td>
		<td>	{{ Form::text('city', null, array('id' => 'city'))}}    </td>
		</tr>
		<tr>
		<td colspan="2" align="center">
			{{Form::submit('Save', null, array('class' => 'btn btn-primary', 'id' => 'submit', 'onclick'=>"validateForm()"))}}
		</td>
		</tr>
		{{ Form::close() }}
		
		{{ Html::script('js/validation.js') }}
		{{ Html::script('js/ajax_post_submit.js') }}
	</div>
  </body>
</html>