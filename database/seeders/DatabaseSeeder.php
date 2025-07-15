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

        // User::create([
        //     'name' => 'Michelle Putri',
        //     'email' => 'mchl@mail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'johnd@mail.com',
        //     'password' => bcrypt('password'),
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive',
        ]);

        Category::create([
            'name' => 'News',
            'slug' => 'news',
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Title Blog One',
        //     'slug' => 'title-blog-one',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.</p>
        //     <p>
        //     At enim tenetur non iusto maxime ullam eum deleniti laborum voluptatem illum tempora odio incidunt fugit doloremque vero iure adipisci sequi expedita quasi voluptates, porro nobis. Quae autem vitae doloribus natus praesentium dolorum sequi dolores provident? Natus voluptates eum rem facere explicabo odit, cum vel sint quidem ratione porro incidunt distinctio dicta ipsum doloremque ab quos iure a, dolore fugiat odio.
        //     </p>
        //     <p>
        //     Perspiciatis labore repellendus odio earum accusantium dolorum accusamus vel suscipit, culpa neque illum fuga! Quae ipsum, perferendis nostrum tempore delectus accusantium dolores repudiandae voluptatibus, et, aliquid ad dolorem incidunt iusto! Cupiditate commodi voluptates voluptatibus sed delectus! Exercitationem laudantium a nam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dicta rerum id nisi cumque, voluptatibus sit sed minima assumenda accusantium libero veniam nemo laborum animi dolor praesentium alias ipsum veritatis ad exercitationem delectus? Consequatur fuga, repellat voluptate quasi necessitatibus hic nesciunt sed non ut quis suscipit velit nam magni odio.
        //     </p>',
        // ]);

        // Post::create([
        //     'title' => 'Title Blog Two',
        //     'slug' => 'title-blog-two',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.</p>
        //     <p>
        //     At enim tenetur non iusto maxime ullam eum deleniti laborum voluptatem illum tempora odio incidunt fugit doloremque vero iure adipisci sequi expedita quasi voluptates, porro nobis. Quae autem vitae doloribus natus praesentium dolorum sequi dolores provident? Natus voluptates eum rem facere explicabo odit, cum vel sint quidem ratione porro incidunt distinctio dicta ipsum doloremque ab quos iure a, dolore fugiat odio.
        //     </p>
        //     <p>
        //     Perspiciatis labore repellendus odio earum accusantium dolorum accusamus vel suscipit, culpa neque illum fuga! Quae ipsum, perferendis nostrum tempore delectus accusantium dolores repudiandae voluptatibus, et, aliquid ad dolorem incidunt iusto! Cupiditate commodi voluptates voluptatibus sed delectus! Exercitationem laudantium a nam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dicta rerum id nisi cumque, voluptatibus sit sed minima assumenda accusantium libero veniam nemo laborum animi dolor praesentium alias ipsum veritatis ad exercitationem delectus? Consequatur fuga, repellat voluptate quasi necessitatibus hic nesciunt sed non ut quis suscipit velit nam magni odio.
        //     </p>',
        // ]);

        // Post::create([
        //     'title' => 'Title Blog Three',
        //     'slug' => 'title-blog-three',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.</p>
        //     <p>
        //     At enim tenetur non iusto maxime ullam eum deleniti laborum voluptatem illum tempora odio incidunt fugit doloremque vero iure adipisci sequi expedita quasi voluptates, porro nobis. Quae autem vitae doloribus natus praesentium dolorum sequi dolores provident? Natus voluptates eum rem facere explicabo odit, cum vel sint quidem ratione porro incidunt distinctio dicta ipsum doloremque ab quos iure a, dolore fugiat odio.
        //     </p>
        //     <p>
        //     Perspiciatis labore repellendus odio earum accusantium dolorum accusamus vel suscipit, culpa neque illum fuga! Quae ipsum, perferendis nostrum tempore delectus accusantium dolores repudiandae voluptatibus, et, aliquid ad dolorem incidunt iusto! Cupiditate commodi voluptates voluptatibus sed delectus! Exercitationem laudantium a nam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dicta rerum id nisi cumque, voluptatibus sit sed minima assumenda accusantium libero veniam nemo laborum animi dolor praesentium alias ipsum veritatis ad exercitationem delectus? Consequatur fuga, repellat voluptate quasi necessitatibus hic nesciunt sed non ut quis suscipit velit nam magni odio.
        //     </p>',
        // ]);

        // Post::create([
        //     'title' => 'Title Blog Four',
        //     'slug' => 'title-blog-four',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates officia consequatur eum magnam ullam itaque optio! Corrupti eligendi cum numquam, qui non deserunt tenetur iusto illum recusandae ipsam dicta nostrum aspernatur voluptate est quod laudantium dolore, quisquam obcaecati nisi voluptas? Ullam labore mollitia necessitatibus unde nisi quidem impedit.</p>
        //     <p>
        //     At enim tenetur non iusto maxime ullam eum deleniti laborum voluptatem illum tempora odio incidunt fugit doloremque vero iure adipisci sequi expedita quasi voluptates, porro nobis. Quae autem vitae doloribus natus praesentium dolorum sequi dolores provident? Natus voluptates eum rem facere explicabo odit, cum vel sint quidem ratione porro incidunt distinctio dicta ipsum doloremque ab quos iure a, dolore fugiat odio.
        //     </p>
        //     <p>
        //     Perspiciatis labore repellendus odio earum accusantium dolorum accusamus vel suscipit, culpa neque illum fuga! Quae ipsum, perferendis nostrum tempore delectus accusantium dolores repudiandae voluptatibus, et, aliquid ad dolorem incidunt iusto! Cupiditate commodi voluptates voluptatibus sed delectus! Exercitationem laudantium a nam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dicta rerum id nisi cumque, voluptatibus sit sed minima assumenda accusantium libero veniam nemo laborum animi dolor praesentium alias ipsum veritatis ad exercitationem delectus? Consequatur fuga, repellat voluptate quasi necessitatibus hic nesciunt sed non ut quis suscipit velit nam magni odio.
        //     </p>',
        // ]);
    }
}
