<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
	
	<link rel="stylesheet" href="/css/main.css">
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
        			<a href="#" onClick="history.go(-1);return true;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        			<a href="" class="invisible">lor</a>
        			<a href="/">Home</a>

        			@if (Session::has('successMessage'))
        				<a href="" class="invisible">lor</a>
						<div class="success">Post created.</div>     
					@elseif (Session::has('deleteMessage'))
						<a href="" class="invisible">lor</a>
						<div class="error">Post deleted.</div> 
					@elseif (Session::has('updateMessage'))
						<a href="" class="invisible">lor</a>
						<div class="success">Post Updated.</div>
					@elseif (Session::has('notOwner'))
						<a href="" class="invisible">lor</a>
						<div class="error">You do not have access to that post.</div>
					@elseif (Session::has('deleteUser'))
						<a href="" class="invisible">lor</a>
						<div class="error">User deleted.</div>
					@elseif (Session::has('accessDenied'))
						<a href="" class="invisible">lor</a>
						<div class="error">Access denied.</div>
					@endif
        		</ul>
	            <ul class="nav navbar-nav navbar-right navbar-text">
					
					<a href="" class="invisible">lorem</a>
					@if (\Auth::check() && \Auth::user()->email !== 'admin@admin.com')
						<a href="/posts/create">Create</a>
						<a href="" class="invisible">lor</a>
						<a href="/account">My Account</a>
						<a href="" class="invisible">lor</a>
						<a href="/logout">Logout</a>
					@elseif (!\Auth::check())
						<a href="/login">Login</a>
						<a href="" class="invisible">lor</a>
						<a href="/register">Register</a>
					@elseif (\Auth::check() && \Auth::user()->email === 'admin@admin.com')
						<a href="/users">Edit Users</a>
						<a href="" class="invisible">lor</a>
						<a href="/posts/create">Create</a>
						<a href="" class="invisible">lor</a>
						<a href="/account">My Account</a>
						<a href="" class="invisible">lor</a>
						<a href="/logout">Logout</a>
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
	    			$('.searchPost').css('background-color', '#6D6D6D');
	    		}
	    	});

	    	$('.searchUser').click(function(){
	    		if ($('.searchUser').is(':checked')) {
	    			$('.searchUser').css('background-color', '#6E6956');
	    		} else {
	    			$('.searchUser').css('background-color', '#6D6D6D');
	    		}
	    	});


		});
    </script>

</body>
</html>











