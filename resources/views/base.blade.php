<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script>
		window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
			]) !!};
		</script>
	</head>
	<body>

		<div class="container">

		<div class="col-sm-7">

				@yield('content')


			</div>
		</div>


		<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



		<script src="{{ mix('js/app.js') }}" ></script>

	</body>
	</html>