<?php 


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run() {
		$faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Post::create([
                'title' => $faker->realText(mt_rand(10, 20)),
                'content' => $faker->realText(mt_rand(50, 1500)),
                'url' => $faker->url,
                'created_by' => 101
            ]);
        }
	}

}