<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Rezani Alwi',
            'username' => 'rezanialwi',
            'email' => 'rezanialwi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Jaelani Ariyanor',
        //     'email' => 'jaelani@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Programming PHP',
        //     'slug' => 'programming-php',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo praesentium at minima, ipsum exercitationem velit natus, dolore soluta aliquam magnam quo necessitatibus est modi beatae eius nostrum hic deleniti quod facilis quidem! Eligendi placeat consectetur sequi, minima dolorem deserunt reiciendis eum repellat molestias quidem voluptatibus nesciunt sint necessitatibus id deleniti in. Modi beatae suscipit hic ipsam saepe ea perferendis. Repellat ducimus vitae ut ipsam non, cumque aut optio aliquid minus beatae suscipit distinctio neque quam maiores quasi tempora repudiandae similique consequuntur fuga corporis id minima. Minus asperiores quisquam repellat quo, aliquam eaque praesentium consectetur atque neque, cum suscipit vero perspiciatis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Machine Learning',
        //     'slug' => 'machine-learning',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo praesentium at minima, ipsum exercitationem velit natus, dolore soluta aliquam magnam quo necessitatibus est modi beatae eius nostrum hic deleniti quod facilis quidem! Eligendi placeat consectetur sequi, minima dolorem deserunt reiciendis eum repellat molestias quidem voluptatibus nesciunt sint necessitatibus id deleniti in. Modi beatae suscipit hic ipsam saepe ea perferendis. Repellat ducimus vitae ut ipsam non, cumque aut optio aliquid minus beatae suscipit distinctio neque quam maiores quasi tempora repudiandae similique consequuntur fuga corporis id minima. Minus asperiores quisquam repellat quo, aliquam eaque praesentium consectetur atque neque, cum suscipit vero perspiciatis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Rezani programmer',
        //     'slug' => 'rezani-programmer',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo praesentium at minima, ipsum exercitationem velit natus, dolore soluta aliquam magnam quo necessitatibus est modi beatae eius nostrum hic deleniti quod facilis quidem! Eligendi placeat consectetur sequi, minima dolorem deserunt reiciendis eum repellat molestias quidem voluptatibus nesciunt sint necessitatibus id deleniti in. Modi beatae suscipit hic ipsam saepe ea perferendis. Repellat ducimus vitae ut ipsam non, cumque aut optio aliquid minus beatae suscipit distinctio neque quam maiores quasi tempora repudiandae similique consequuntur fuga corporis id minima. Minus asperiores quisquam repellat quo, aliquam eaque praesentium consectetur atque neque, cum suscipit vero perspiciatis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


        
    }
}
