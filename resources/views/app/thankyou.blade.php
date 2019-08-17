<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Registration</title>
  <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'GA_MEASUREMENT_ID');
  </script>
  <script>
	function checkFirstVisit() {
	  if(document.cookie.indexOf('mycookie')==-1){
		// cookie doesn't exist, create it now
		document.cookie = 'mycookie=1';
		gtag('event', 'Successful Submission');
	  }
	}
  </script>
  </head>
  <body onload="checkFirstVisit()">
	<div class="container">
		<h1>	Thank you, {{$name}}! </h1>
	</div>
  </body>
</html>  