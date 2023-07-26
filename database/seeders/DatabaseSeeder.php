<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        User::create([
            'name' => 'Rangga Dwi Cahya',
            'username' => 'drchya',
            'email' => 'rangga.dwichya@gmail.com',
            'password' => bcrypt('Password')
        ]);

        // User::create([
        //     'name' => 'Evita Rizky Utami',
        //     'email' => 'evita@gmail.com',
        //     'password' => bcrypt('Password')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur, quis saepe commodi repellat fugiat sint quam temporibus expedita. Aliquam harum ullam ab. Doloribus sit, iste odio aut inventore maiores nisi veniam perferendis neque praesentium, in distinctio consequuntur magni dolorum quisquam modi fugiat. Dolor rerum aspernatur aliquam neque! Quae totam ut ratione accusantium quasi voluptatibus consequuntur perferendis, quam repudiandae laudantium sapiente illo voluptate placeat possimus. Ab saepe eveniet culpa quo sequi obcaecati blanditiis quia sit, alias amet provident, consequatur eaque minima omnis vel, sint deleniti debitis perspiciatis placeat nam id quod harum? Corporis temporibus itaque maiores obcaecati dignissimos enim deleniti fugit voluptate consectetur porro sapiente necessitatibus libero cum placeat nam omnis repudiandae esse, incidunt exercitationem ullam maxime, minus neque. Explicabo, error quasi consequuntur ullam, minima dolor atque adipisci repellendus similique, omnis voluptatem velit culpa ipsa architecto? Expedita autem, earum quia facere unde dolore quam odio. Recusandae, assumenda officia corrupti nemo velit incidunt deleniti itaque ullam dicta exercitationem minus facilis repellat, est accusamus dignissimos sunt! Nulla totam magni vitae reiciendis ipsam cum explicabo, non, consequuntur ad dolorum itaque odit laboriosam eius, delectus quo culpa dignissimos? Ut, iste in eaque sit rem quidem quis? Quia, sequi esse!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur, quis saepe commodi repellat fugiat sint quam temporibus expedita. Aliquam harum ullam ab. Doloribus sit, iste odio aut inventore maiores nisi veniam perferendis neque praesentium, in distinctio consequuntur magni dolorum quisquam modi fugiat. Dolor rerum aspernatur aliquam neque! Quae totam ut ratione accusantium quasi voluptatibus consequuntur perferendis, quam repudiandae laudantium sapiente illo voluptate placeat possimus. Ab saepe eveniet culpa quo sequi obcaecati blanditiis quia sit, alias amet provident, consequatur eaque minima omnis vel, sint deleniti debitis perspiciatis placeat nam id quod harum? Corporis temporibus itaque maiores obcaecati dignissimos enim deleniti fugit voluptate consectetur porro sapiente necessitatibus libero cum placeat nam omnis repudiandae esse, incidunt exercitationem ullam maxime, minus neque. Explicabo, error quasi consequuntur ullam, minima dolor atque adipisci repellendus similique, omnis voluptatem velit culpa ipsa architecto? Expedita autem, earum quia facere unde dolore quam odio. Recusandae, assumenda officia corrupti nemo velit incidunt deleniti itaque ullam dicta exercitationem minus facilis repellat, est accusamus dignissimos sunt! Nulla totam magni vitae reiciendis ipsam cum explicabo, non, consequuntur ad dolorum itaque odit laboriosam eius, delectus quo culpa dignissimos? Ut, iste in eaque sit rem quidem quis? Quia, sequi esse!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur, quis saepe commodi repellat fugiat sint quam temporibus expedita. Aliquam harum ullam ab. Doloribus sit, iste odio aut inventore maiores nisi veniam perferendis neque praesentium, in distinctio consequuntur magni dolorum quisquam modi fugiat. Dolor rerum aspernatur aliquam neque! Quae totam ut ratione accusantium quasi voluptatibus consequuntur perferendis, quam repudiandae laudantium sapiente illo voluptate placeat possimus. Ab saepe eveniet culpa quo sequi obcaecati blanditiis quia sit, alias amet provident, consequatur eaque minima omnis vel, sint deleniti debitis perspiciatis placeat nam id quod harum? Corporis temporibus itaque maiores obcaecati dignissimos enim deleniti fugit voluptate consectetur porro sapiente necessitatibus libero cum placeat nam omnis repudiandae esse, incidunt exercitationem ullam maxime, minus neque. Explicabo, error quasi consequuntur ullam, minima dolor atque adipisci repellendus similique, omnis voluptatem velit culpa ipsa architecto? Expedita autem, earum quia facere unde dolore quam odio. Recusandae, assumenda officia corrupti nemo velit incidunt deleniti itaque ullam dicta exercitationem minus facilis repellat, est accusamus dignissimos sunt! Nulla totam magni vitae reiciendis ipsam cum explicabo, non, consequuntur ad dolorum itaque odit laboriosam eius, delectus quo culpa dignissimos? Ut, iste in eaque sit rem quidem quis? Quia, sequi esse!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
       
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloribus natus quas aliquid officiis pariatur, quis saepe commodi repellat fugiat sint quam temporibus expedita. Aliquam harum ullam ab. Doloribus sit, iste odio aut inventore maiores nisi veniam perferendis neque praesentium, in distinctio consequuntur magni dolorum quisquam modi fugiat. Dolor rerum aspernatur aliquam neque! Quae totam ut ratione accusantium quasi voluptatibus consequuntur perferendis, quam repudiandae laudantium sapiente illo voluptate placeat possimus. Ab saepe eveniet culpa quo sequi obcaecati blanditiis quia sit, alias amet provident, consequatur eaque minima omnis vel, sint deleniti debitis perspiciatis placeat nam id quod harum? Corporis temporibus itaque maiores obcaecati dignissimos enim deleniti fugit voluptate consectetur porro sapiente necessitatibus libero cum placeat nam omnis repudiandae esse, incidunt exercitationem ullam maxime, minus neque. Explicabo, error quasi consequuntur ullam, minima dolor atque adipisci repellendus similique, omnis voluptatem velit culpa ipsa architecto? Expedita autem, earum quia facere unde dolore quam odio. Recusandae, assumenda officia corrupti nemo velit incidunt deleniti itaque ullam dicta exercitationem minus facilis repellat, est accusamus dignissimos sunt! Nulla totam magni vitae reiciendis ipsam cum explicabo, non, consequuntur ad dolorum itaque odit laboriosam eius, delectus quo culpa dignissimos? Ut, iste in eaque sit rem quidem quis? Quia, sequi esse!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
