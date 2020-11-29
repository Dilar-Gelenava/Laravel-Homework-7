<!DOCTYPE html>
<html>
<head>
	<title> Create </title>

	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}" 
    rel="stylesheet">

</head>
<body>
	<div class="container">
		<form method="POST" action="{{ route('adminstore') }}">
			@csrf
			<br>
			<h1 style="text-align: center;">მოგესალმებით</h1>
			<br>
			<br>
			<label>სათაური</label>
			<input type="text" name="title" placeholder="სათაური" class="form-control">
			<br>
			<label>აღწერა</label>
			<textarea name="description" placeholder="დაამატეთ აღწერა" class="form-control"></textarea>
			<br>
			<button>შენახვა</button>
		</form>
	</div>
</body>
</html>