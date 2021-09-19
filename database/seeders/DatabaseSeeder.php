<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sabdhika',
            'username' => 'sandhikagalih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(3)->create();


        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);

        Category::create([
            "name" => "Web-Design",
            "slug" => "web-design"
        ]);

        Post::Factory(20)->create();

        // User::create([
        //     "name" => "Akhis",
        //     "email" => "akhis@gmail.com",
        //     "password" => bcrypt("1234")
        // ]);
        // Post::create([
        //     "title" => "Post Ke Satu",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     "slug" => "post-ke-satu",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae recusandae nesciunt sint numquam at voluptates odio facere autem cumque ipsa, dicta, nobis aperiam odit sit blanditiis eligendi veritatis inventore accusamus doloribus assumenda. Nemo, modi debitis consequuntur cumque dicta aspernatur perferendis cupiditate, ullam enim, harum voluptas? Harum, possimus ducimus. Quo sunt dolorum error aut omnis ea, iure asperiores cupiditate porro, cumque velit accusamus officiis illum voluptas ratione sed voluptatem ducimus eum alias esse. Omnis amet non, neque sint nostrum ex ratione praesentium quod reiciendis culpa? Cupiditate necessitatibus eum magnam assumenda, dolorum aperiam officiis dignissimos delectus laudantium rerum ab quisquam illum quibusdam!",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
    }
}
