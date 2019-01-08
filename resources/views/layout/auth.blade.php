<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/home')}}/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="{{url('public/auth')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/auth')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background:blue">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				@yield('content')
			</div>
		</div>
	</div>
		
</body>
</html>