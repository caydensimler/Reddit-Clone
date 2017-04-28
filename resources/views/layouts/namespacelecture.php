<?php 


// 1. Organize code, similar types of classes
	// all models in \App\Models
	// all controllers in \App\Http\Controllers

// 2. Avoid name collisions
	// Classes with the same name -> Laravel's Event class
	// Fully-Qualified Names -> FQN


// File system -> root folder -> /


// \Session -> root namespace

// root namespace decloration is optional
namespace MeetupClone { // root namespace
	class Event 
	{

	}

	// $event = new Event(); SAME AS $event = new \Event(); 


}

namespace GithubApiClient {
	class Event
	{

	}
}

// Nested namespace(s)
namespace App {
	namespace Models {
		class Post 
		{

		}
	}
}

use MeetupClone\Event as MeetupEvent;
use GithubApiClient\Event as GithubEvent;

$meetupEvent = new MeetupEvent(); // FQN (fully-qualified name);
$githubEvent = new GithubEvent(); // FQN (fully-qualified name);


























