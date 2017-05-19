<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	  <link href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
	  
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script>

    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>

	<title>laravelUSER</title>

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

	<script src="{{ mix('js/app.js') }}" ></script>

</body>
</html>