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
			background-image: url('/blue-background-023.jpg');
			background-size: fill;
			background-repeat: no-repeat;
			background-position: left;
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
			position: relative;
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

		.navbar {
			background-color: #383836;
		}

		#navbar > ul > li > a {
			color: white;
		}

		body > nav > div > div.navbar-header > ul {
			display: inline;
		}

		body > nav > div > div.navbar-header > ul > li.success {
			color: #45A555;
			display: inline;
			font-size: 20px;
		}

		body > nav > div > div.navbar-header > ul > li.error {
			display: inline;
			color: #E07676;
			font-size: 20px;
		}

		#navbar {
			text-align: center;
		}

		#navbar > ul > a:nth-child(1) {
			color: white;
			font-size: 20px;
		}			

		#navbar > ul > a:nth-child(1):hover {
			font-style: italic;
			text-decoration: none;
		}		

		#navbar > ul > a:nth-child(3) {
			color: white;
			font-size: 20px;
		}		

		#navbar > ul > a:nth-child(3):hover {
			font-style: italic;
			text-decoration: none;
		}

		.invisibleTwo {
			font-size: 2.5vw;
		}

		.navbar-text {
			display: inline;
		}

		.nav {
			display: inline;
		}



	</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          			
      			@if (Session::has('successMessage'))
      				<ul class="nav navbar-text navbar-left">
						<li class="success">Post created successfully</li>
					</ul>
				@endif       

				@if (Session::has('deleteMessage'))
					<ul class="nav navbar-text navbar-left">
						<li class="error">Post successfully deleted</li>
					</ul>
				@endif  

				@if (Session::has('errorMessage'))
					<ul class="nav navbar-text navbar-left">
						<li class="error">Post not found</li>
					</ul>
				@endif 

				@if (Session::has('updateMessage'))
					<ul class="nav navbar-text navbar-left">
						<li class="success">Post Updated Successfully</li>
					</ul>
				@endif
       		</div>

	        	<div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav navbar-right navbar-text">
						<a href="/posts">Home</a>
						<a href="" class="invisible">lorem</a>
						<a href="/posts/create">Create</a>
		          	</ul>
	        	</div>
        	</div>
      	</div>
    </nav>

    <div class="invisible invisibleTwo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ab excepturi, quasi maxime facilis optio a id quas dignissimos debitis sunt consequuntur nisi officia voluptates voluptatum quisquam, nihil eligendi amet!</div>

    @yield('content')

    <div class="invisible invisibleTwo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ab excepturi, quasi maxime facilis optio a id quas dignissimos debitis sunt consequuntur nisi officia voluptates voluptatum quisquam, nihil eligendi amet!</div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/788edc112b.js"></script>

</body>
</html>











