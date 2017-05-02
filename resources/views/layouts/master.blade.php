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
			background-color: #B7DDE2;
			color: white;
		}

		.postsHeader {
			background-image: url('/header.jpg');
			position: left;
			background-size: cover;
			background-repeat: no-repeat;
		}
	
		.center {
			text-align: center;
		}

		.postBody {
			border-top: 1px solid #6E6956;
			border-bottom: 1px solid #6E6956;
			border-radius: 5px;
			color: #6E6956;
			padding: 20px;
			margin-bottom: 10px;
			margin-top: 20px;
			position: relative;
		}
		
		.title {
			font-size: 6vw;
			text-align: left;
		}

		input.content {
			font-size: 2vw;
			height: 20vw;
		}

		input.title {
			height: 4vw;
		}

		input.url {
			height: 4vw;
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

		.postContent {
			font-size: 2.2vw;
			text-align: left;
		}

		.postUrl a {
			font-size: 1.5vw;
			color: #B8B9AB;
		}

		.postUrl a:hover {
			color: #6E6956;
			text-decoration: none;
		}

		.content {
			height: 300%;
		}

		.createEditHeader {
			font-size: 4vw;
			text-align: center;
		}

		.navbar {
			background-color: #6E6956;
			border-bottom: 1px solid #B7DDE2;
		}

		.success {
			color: #45A555;
			display: inline;
			font-size: 20px;
		}

		.error {
			display: inline;
			color: #E07676;
			font-size: 20px;
		}

		#navbar {
			text-align: center;
		}

		.invisibleTwo {
			font-size: 2.5vw;
		}

		body > nav > div > div.nav.navbar-nav.navbar-left > ul {
			font-size: 1vw;
		}

		body > div.col-xs-12.center > ul > li.active > span {
			background-color: #6E6956;
			border: 1px solid #6E6956;
			color: #B7DDE2;
		}

		body > div.col-xs-12.center > ul > li > a {
			background-color: #B7DDE2;
			border: 1px solid #6E6956;
			color: #6E6956;
		}

		body > div.col-xs-12.center > ul > li > a:hover {
			background-color: #6E6956;
			border: 1px solid #6E6956;
			color: #B7DDE2;
		}

		body > div.col-xs-12.center > ul > li:nth-child(1) > span {
			background-color: #6E6956;
			color: #B7DDE2;
		}

		body > div.col-xs-12.center > ul > li.disabled > span {
			background-color: #B7DDE2;
			border: 1px solid #6E6956;
			color: #6E6956;
		}

		.moveFromTop {
			padding-top: 12%;
		}

		#navbar > ul.nav.navbar-nav.navbar-right.navbar-text a {
			color: #B7DDE2;
			font-size: 20px;
		}

		#navbar > ul.nav.navbar-nav.navbar-left.navbar-text a {
			color: #B7DDE2;
			font-size: 20px;
		}

		#navbar > ul.nav.navbar-nav.navbar-left.navbar-text a:hover {
			font-size: 20px;
			/*font-style: italic;*/
			font-weight: bold;
			text-decoration: none;
		}

		#navbar > ul.nav.navbar-nav.navbar-right.navbar-text a:hover {
			font-size: 20px;
			/*font-style: italic;*/
			font-weight: bold;
			text-decoration: none;
		}

		.accountHeader {
			font-size: 4vw;
			color: #6E6956;
			padding-left: 1%;
			padding-bottom: 5%;
		}

		.viewPost a {
			color: #6E6956;
			font-size: 3vw;
		}

		.viewPost a:hover {
			font-size: 3.5vw;
		}

		.editPost a {
			font-size: 2.2vw;
			color: #B8B9AB;
		}

		.editPost a:hover {
			color: #6E6956;
			text-decoration: none;
		}

		.registerHeader {
			font-size: 2vw;
			color: #6E6956;
		}

		.registerBody {
			border-left: 1px solid #6E6956;
			border-right: 1px solid #6E6956;
			border-radius: 4px;
		}

		.registerBodyTop {
			border-top: 1px solid #6E6956;
		}

		.registerBodyBottom {
			border-bottom: 1px solid #6E6956;
		}

		.registerInput {
			background-color: #B8B9AB;
			border: 1px solid #6E6956;
		}

		.postBody a:hover {
			background-color: #A3C4C9;
		}

		.postsHeaderSubTitle {
			font-size: 2vw;
			padding-bottom: 35%;
			padding-left: 4%;
			color: #B7DDE2;
			text-shadow: 1px 1px #6E6956;
		}

		.postsHeaderTitle {
			font-size: 8vw;
			color: #B7DDE2;
			padding-top: 10%;
			text-align: left;
			text-shadow: 2px 2px #6E6956;
			padding-left: 2%;
		}

		.postsName {
			font-size: 1.7vw;
		}

		.noPosts {
			font-size: 2vw;
			color: #6E6956;
		}

		.noPosts a {
			color: #B8B9AB;
			text-decoration: none;
		}

		.noPosts a:hover {
			color: #6E6956;
		}

		.searchBar {
			margin-bottom: 5%;
			height: 150%;
			width: 100%;
			background-color: #B8B9AB;
			border: 1px solid #6E6956;
			color: #6E6956;
			font-size: 2vw;
		}

		.searchHeader {
			color: #6E6956;
			font-size: 2vw;
			margin-top: 5%;
			text-align: center;
		}

		.searchOptions {
			background-color: #6E6956;
			color: #B7DDE2;
			padding: 1%;
			margin: 1%;
			border-radius: 5px;
			font-size: 1.5vw;
		}

		.searchOptions:hover {
			background-color: #6E6956;
			cursor: pointer;
		}

		.searchPost:hover {
			background-color: #B8B9AB;
			cursor: pointer;		
		}

		.searchUser:hover {
			background-color: #B8B9AB;
			cursor: pointer;		
		}

		input[type="checkbox"]:hover {
			background-color: #B8B9AB;
		}

		input[type="submit"] {
			background-color: #6E6956;
			font-size: 1.5vw;
			padding: 7%;
			margin: 7%;
			color: #B7DDE2;
			border: 1px solid transparent;
			border-radius: 5px;
		}

		input[type="submit"]:hover {
			background-color: #B8B9AB;
		}

		.buttonHolder {
			text-align: center;
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
       		</div>

        	<div id="navbar" class="navbar-collapse collapse">
        		<ul class="nav navbar-nav navbar-left navbar-text">
        			<a href="/">Home</a>

        			@if (Session::has('successMessage'))
        				<a href="" class="invisible">lor</a>
						<div class="success">Post created</div>     
					@elseif (Session::has('deleteMessage'))
						<a href="" class="invisible">lor</a>
						<div class="error">Post deleted</div> 
					@elseif (Session::has('updateMessage'))
						<a href="" class="invisible">lor</a>
						<div class="success">Post Updated</div>
					@elseif (Session::has('notOwner'))
						<a href="" class="invisible">lor</a>
						<div class="error">You do not have access to that post.</div>
					@endif
        		</ul>
	            <ul class="nav navbar-nav navbar-right navbar-text">
					
					<a href="" class="invisible">lorem</a>
					@if (\Auth::check())
						<a href="/posts/create">Create</a>
						<a href="" class="invisible">lor</a>
						<a href="/account">My Account</a>
						<a href="" class="invisible">lor</a>
						<a href="/logout">Logout</a>
					@elseif (!\Auth::check())
						<a href="/login">Login</a>
						<a href="" class="invisible">lor</a>
						<a href="/register">Register</a>
					@endif
	          	</ul>
        	</div>

      	</div>
    </nav>

    @yield('content')

    <div class="invisible invisibleTwo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ab excepturi, quasi maxime facilis optio a id quas dignissimos debitis sunt consequuntur nisi officia voluptates voluptatum quisquam, nihil eligendi amet!</div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/788edc112b.js"></script>

	<!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>

    	$(document).ready(function(){



	    	$('.searchPost').click(function(){
	    		if ($('.searchPost').is(':checked')) {
	    			$('.searchPost').css('background-color', '#6E6956');
	    		} else {
	    			$('.searchPost').css('background-color', '#B8B9AB');
	    		}
	    	});

	    	$('.searchUser').click(function(){
	    		if ($('.searchUser').is(':checked')) {
	    			$('.searchUser').css('background-color', '#6E6956');
	    		} else {
	    			$('.searchUser').css('background-color', '#B8B9AB');
	    		}
	    	});


		});
    </script>

</body>
</html>











