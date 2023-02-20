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
            'name' => 'Diana Ratna Sari',
            'username' => 'diana ratna',
            'email' => 'dianaratnas25@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Nadia Ayu R',
        //     'email' => 'nadia456@gmail.com',
        //     'password' => bcrypt('56789')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione veniam at eaque quis illum voluptatum rem in consequuntur debitis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione veniam at eaque quis illum voluptatum rem in consequuntur debitis adipisci explicabo sed error molestiae perferendis, iure id odio dignissimos ex, recusandae animi aut ea velit repellat! Deleniti quae iste doloremque ipsa quis, vel optio veritatis, eligendi est non voluptate nulla sint! Eum voluptate temporibus aliquam velit ratione recusandae. Possimus quam minima consectetur laborum ex! Pariatur non voluptates iste eligendi temporibus qui delectus quod ad impedit blanditiis! Assumenda magni soluta odit ipsa, quas dolore? Laboriosam atque, accusantium maiores, eaque velit aliquam ex a saepe quisquam illum hic porro obcaecati. Quibusdam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione veniam at eaque quis illum voluptatum rem in consequuntur debitis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione veniam at eaque quis illum voluptatum rem in consequuntur debitis adipisci explicabo sed error molestiae perferendis, iure id odio dignissimos ex, recusandae animi aut ea velit repellat! Deleniti quae iste doloremque ipsa quis, vel optio veritatis, eligendi est non voluptate nulla sint! Eum voluptate temporibus aliquam velit ratione recusandae. Possimus quam minima consectetur laborum ex! Pariatur non voluptates iste eligendi temporibus qui delectus quod ad impedit blanditiis! Assumenda magni soluta odit ipsa, quas dolore? Laboriosam atque, accusantium maiores, eaque velit aliquam ex a saepe quisquam illum hic porro obcaecati. Quibusdam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione veniam at eaque quis illum voluptatum rem in consequuntur debitis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione veniam at eaque quis illum voluptatum rem in consequuntur debitis adipisci explicabo sed error molestiae perferendis, iure id odio dignissimos ex, recusandae animi aut ea velit repellat! Deleniti quae iste doloremque ipsa quis, vel optio veritatis, eligendi est non voluptate nulla sint! Eum voluptate temporibus aliquam velit ratione recusandae. Possimus quam minima consectetur laborum ex! Pariatur non voluptates iste eligendi temporibus qui delectus quod ad impedit blanditiis! Assumenda magni soluta odit ipsa, quas dolore? Laboriosam atque, accusantium maiores, eaque velit aliquam ex a saepe quisquam illum hic porro obcaecati. Quibusdam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
