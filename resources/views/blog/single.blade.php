<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Home </title>
	</head>
	<body>
		<h1> selamat datang d blog ini </h1>
		<h2> {{ $blog }} </h2>
		
		@foreach($users as $user)
			<li>{{$user}}</li>
		@endforeach

	</body>

</html
