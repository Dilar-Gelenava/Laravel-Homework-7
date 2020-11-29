<!DOCTYPE html>
<html>
<head>
	<title> Create </title>

	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}" 
    rel="stylesheet">

</head>
<body>
	<div class="container" align="center">
		<br>
		<h1>საინფორმაციო ცხრილი</h1>
		<br>
		<a href="{{ route('home') }}" class="btn btn-success">ახლის დამატება</a>
		<br>
		<br>

		<table class="table table-dark">
			<tr>
				<th>#</th>
				<th>სათაური</th>
				<th>აღწერა</th>
				<th>მოქმედება</th>
			</tr>
			@foreach ($products as $product)
				<tr>
					<td>{{ ++$loop->index }}</td>
					<td>{{ $product->title }}</td>
					<td>{{ $product->description }}</td>
					<td>
						
						<a href="{{ route('adminshow',["id"=>$product->id]) }}" class="btn btn-success">ნახვა</a>

						@if ( $product->user_id == Auth::user()->id)
							<a href="{{ route('adminedit',["id"=>$product->id]) }}" class="btn btn-warning">ჩასწორება</a>

							<form method="POST" action="{{ route('admindestroy') }}">
								@csrf

								<input type="hidden" name="id" value="{{ $product->id }}">

								<button class="btn btn-danger">წაშლა</button>
						@endif

						</form>						
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>