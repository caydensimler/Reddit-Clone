<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">

	<style>

		body {
			font-family: 'Alegreya', serif;
			background-color: #356489;
			color: white;
		}
	
		.center {
			text-align: center;
		}

		.postBody {
			background-color: #383836;
			border: 1px solid white;
			/*border-image: url(wood.jpg) 50 round;*/
			color: white;
			padding: 20px;
			margin-bottom: 10px;
			margin-top: 20px;
		}
		
		.title {
			font-size: 6vw;
		}

		.content {
			font-size: 2vw;
		}

		.pagination {
			font-size: 2vw;
		}

		.header {
			font-size: 2vw;
		}

		.form-control {
			font-size: 2vw;
			height: 150%;
		}

		.content {
			height: 300%;
		}

		.createEditHeader {
			font-size: 4vw;
			text-align: center;
		}


	</style>
</head>
<body>
	@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{ session('successMessage') }}</div>
	@endif	

	@if (Session::has('deleteMessage'))
    	<div class="alert alert-danger">{{ session('deleteMessage') }}</div>
	@endif

	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{ session('errorMessage') }}</div>
	@endif

	@if (Session::has('updateMessage'))
    	<div class="alert alert-success">{{ session('updateMessage') }}</div>
	@endif

    @yield('content')
</body>
</html>











