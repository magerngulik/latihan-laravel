<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        
        Category::create(
            [
                'name' => 'Web Programming',
                'slug' => 'web-programming',
            ]
        );
        Category::create(
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
            ]
        );

        Category::create(
            [
                'name' => 'Personal ',
                'slug' => 'personal',
            ]
        );

        Post::factory(20)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create(
        //     [
        //         'name' => 'Sandika Galih',
        //         'email' => 'Sandikagalih@gmail.com',
        //         'password' => bcrypt('12345')
        //     ]
        // );
        // User::create(
        //     [
        //         'name' => 'Doddy Firmasyah',
        //         'email' => 'doddyfirmasyah@gmail.com',
        //         'password' => bcrypt('12345')
        //     ]
        // );

        // Post::create([
        //     "title"=>"Postingan Ke Pertama",
        //     "slug"=>"postingan-ke-pertama",
        //     "excerpt"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi",
        //     "body"=> "<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi. Et, dolores adipisci dignissimos quo distinctio ipsum officia, sit nulla delectus possimus recusandae nostrum facere placeat aliquid ab. Vero laudantium ex cum ullam repudiandae natus non veniam explicabo labore est aperiam alias porro consequatur beatae necessitatibus doloremque modi,</p>
        //     <p> velit ut rerum? Ipsum ipsa cumque, consequuntur quae facere sit nulla maiores odio exercitationem officia molestiae molestias tenetur veritatis. Fuga impedit optio corrupti officiis atque, nesciunt nisi eius repudiandae quibusdam sunt ea numquam vitae amet ipsum porro aliquid facilis enim asperiores sequi quaerat, odio cum. Esse rerum sapiente suscipit provident fuga neque placeat! Temporibus, enim nihil molestias earum tempora adipisci, aliquid soluta commodi itaque nam, perspiciatis quam.</p>
        //     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate dolorem sunt eveniet! Minima quibusdam debitis voluptates amet ex veniam, deleniti sit vel, commodi placeat similique optio, a perspiciatis consequuntur beatae iure aspernatur nam. Officiis minus eos ipsam consectetur ipsa omnis quos voluptas sunt blanditiis perspiciatis, libero quod molestiae saepe.</p>",
        //     "category_id" => 2,
        //     "user_id" => 1,
        // ]);
        

        // Post::create([
        //     "title"=>"Postingan Ke Kedua",
        //     "slug"=>"postingan-ke-kedua",
        //     "excerpt"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi",
        //     "body"=> "<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi. Et, dolores adipisci dignissimos quo distinctio ipsum officia, sit nulla delectus possimus recusandae nostrum facere placeat aliquid ab. Vero laudantium ex cum ullam repudiandae natus non veniam explicabo labore est aperiam alias porro consequatur beatae necessitatibus doloremque modi,</p>
        //     <p> velit ut rerum? Ipsum ipsa cumque, consequuntur quae facere sit nulla maiores odio exercitationem officia molestiae molestias tenetur veritatis. Fuga impedit optio corrupti officiis atque, nesciunt nisi eius repudiandae quibusdam sunt ea numquam vitae amet ipsum porro aliquid facilis enim asperiores sequi quaerat, odio cum. Esse rerum sapiente suscipit provident fuga neque placeat! Temporibus, enim nihil molestias earum tempora adipisci, aliquid soluta commodi itaque nam, perspiciatis quam.</p>
        //     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate dolorem sunt eveniet! Minima quibusdam debitis voluptates amet ex veniam, deleniti sit vel, commodi placeat similique optio, a perspiciatis consequuntur beatae iure aspernatur nam. Officiis minus eos ipsam consectetur ipsa omnis quos voluptas sunt blanditiis perspiciatis, libero quod molestiae saepe.</p>",
        //     "category_id" => 1,
        //     "user_id" => 1,
        // ]);
        

        // Post::create([
        //     "title"=>"Postingan Ke Ketiga",
        //     "slug"=>"postingan-ke-ketiga",
        //     "excerpt"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi",
        //     "body"=> "<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi. Et, dolores adipisci dignissimos quo distinctio ipsum officia, sit nulla delectus possimus recusandae nostrum facere placeat aliquid ab. Vero laudantium ex cum ullam repudiandae natus non veniam explicabo labore est aperiam alias porro consequatur beatae necessitatibus doloremque modi,</p>
        //     <p> velit ut rerum? Ipsum ipsa cumque, consequuntur quae facere sit nulla maiores odio exercitationem officia molestiae molestias tenetur veritatis. Fuga impedit optio corrupti officiis atque, nesciunt nisi eius repudiandae quibusdam sunt ea numquam vitae amet ipsum porro aliquid facilis enim asperiores sequi quaerat, odio cum. Esse rerum sapiente suscipit provident fuga neque placeat! Temporibus, enim nihil molestias earum tempora adipisci, aliquid soluta commodi itaque nam, perspiciatis quam.</p>
        //     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate dolorem sunt eveniet! Minima quibusdam debitis voluptates amet ex veniam, deleniti sit vel, commodi placeat similique optio, a perspiciatis consequuntur beatae iure aspernatur nam. Officiis minus eos ipsam consectetur ipsa omnis quos voluptas sunt blanditiis perspiciatis, libero quod molestiae saepe.</p>",
        //     "category_id" => 1,
        //     "user_id" => 2,
        // ]);
        // Post::create([
        //     "title"=>"Postingan Ke Empat",
        //     "slug"=>"postingan-ke-empat",
        //     "excerpt"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi",
        //     "body"=> "<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi eveniet atque ut exercitationem nesciunt modi. Et, dolores adipisci dignissimos quo distinctio ipsum officia, sit nulla delectus possimus recusandae nostrum facere placeat aliquid ab. Vero laudantium ex cum ullam repudiandae natus non veniam explicabo labore est aperiam alias porro consequatur beatae necessitatibus doloremque modi,</p>
        //     <p> velit ut rerum? Ipsum ipsa cumque, consequuntur quae facere sit nulla maiores odio exercitationem officia molestiae molestias tenetur veritatis. Fuga impedit optio corrupti officiis atque, nesciunt nisi eius repudiandae quibusdam sunt ea numquam vitae amet ipsum porro aliquid facilis enim asperiores sequi quaerat, odio cum. Esse rerum sapiente suscipit provident fuga neque placeat! Temporibus, enim nihil molestias earum tempora adipisci, aliquid soluta commodi itaque nam, perspiciatis quam.</p>
        //     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate dolorem sunt eveniet! Minima quibusdam debitis voluptates amet ex veniam, deleniti sit vel, commodi placeat similique optio, a perspiciatis consequuntur beatae iure aspernatur nam. Officiis minus eos ipsam consectetur ipsa omnis quos voluptas sunt blanditiis perspiciatis, libero quod molestiae saepe.</p>",
        //     "category_id" => 1,
        //     "user_id" => 2,
        // ]);

    }
}
