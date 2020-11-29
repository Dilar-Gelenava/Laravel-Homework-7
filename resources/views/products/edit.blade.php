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
		<form method="POST" action="{{ route('adminupdate') }}">
			@csrf
			<br>
			<h1 style="text-align: center;">ჩასწორება</h1>
			<br>
			<br>
			<label>სათაური</label>
			<input type="hidden" name="id" value="{{ $product->id }}">
			<input type="text" name="title" placeholder="სათაური" class="form-control" value="{{ $product->title }}">
			<br>
			<label>აღწერა</label>
			<textarea name="description" placeholder="დაამატეთ აღწერა" class="form-control">{{ $product->description }}</textarea>
			<br>
			<button>შენახვა</button>
		</form>
	</div>
</body>
</html>