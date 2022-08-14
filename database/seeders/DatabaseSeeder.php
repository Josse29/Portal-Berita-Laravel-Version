<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
            'name' => 'Josse surya Pinem',
            'username' =>'josse',
            'email' => 'pinemjoss@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::Factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Developer',
            'slug' => 'web-dev'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis dolorum, commodi amet in, similique nostrum velit quaerat harum, earum autem molestiae pariatur laudantium eum aliquid accusantium placeat neque voluptatem soluta expedita culpa! Sed, facilis reiciendis itaque similique laudantium fugit debitis tempora odit reprehenderit iusto eligendi, nulla. Tempora sit ullam amet accusamus. Dolorum quam sint cupiditate dolores doloribus tempora sed autem, optio sit asperiores quae iste itaque quos dignissimos quasi fuga illum repellat? Ipsam in vero minima error quod natus labore! Excepturi quisquam doloremque perferendis voluptatem delectus praesentium culpa voluptas est corporis optio eos eligendi, facilis iusto natus inventore laudantium, et libero, cum provident. Praesentium tempora quas reiciendis reprehenderit nemo soluta, quae iure dolor et, accusantium quo, repellendus nesciunt? Autem deserunt, molestiae sint quae impedit maxime! Nostrum sequi odit, temporibus sunt perspiciatis perferendis, aliquam obcaecati reprehenderit eius ad quibusdam facere, at nobis quam rerum in, eligendi aperiam modi a placeat?',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis dolorum, commodi amet in, similique nostrum velit quaerat harum, earum autem molestiae pariatur laudantium eum aliquid accusantium placeat neque voluptatem soluta expedita culpa! Sed, facilis reiciendis itaque similique laudantium fugit debitis tempora odit reprehenderit iusto eligendi, nulla. Tempora sit ullam amet accusamus. Dolorum quam sint cupiditate dolores doloribus tempora sed autem, optio sit asperiores quae iste itaque quos dignissimos quasi fuga illum repellat? Ipsam in vero minima error quod natus labore! Excepturi quisquam doloremque perferendis voluptatem delectus praesentium culpa voluptas est corporis optio eos eligendi, facilis iusto natus inventore laudantium, et libero, cum provident. Praesentium tempora quas reiciendis reprehenderit nemo soluta, quae iure dolor et, accusantium quo, repellendus nesciunt? Autem deserunt, molestiae sint quae impedit maxime! Nostrum sequi odit, temporibus sunt perspiciatis perferendis, aliquam obcaecati reprehenderit eius ad quibusdam facere, at nobis quam rerum in, eligendi aperiam modi a placeat?',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis dolorum, commodi amet in, similique nostrum velit quaerat harum, earum autem molestiae pariatur laudantium eum aliquid accusantium placeat neque voluptatem soluta expedita culpa! Sed, facilis reiciendis itaque similique laudantium fugit debitis tempora odit reprehenderit iusto eligendi, nulla. Tempora sit ullam amet accusamus. Dolorum quam sint cupiditate dolores doloribus tempora sed autem, optio sit asperiores quae iste itaque quos dignissimos quasi fuga illum repellat? Ipsam in vero minima error quod natus labore! Excepturi quisquam doloremque perferendis voluptatem delectus praesentium culpa voluptas est corporis optio eos eligendi, facilis iusto natus inventore laudantium, et libero, cum provident. Praesentium tempora quas reiciendis reprehenderit nemo soluta, quae iure dolor et, accusantium quo, repellendus nesciunt? Autem deserunt, molestiae sint quae impedit maxime! Nostrum sequi odit, temporibus sunt perspiciatis perferendis, aliquam obcaecati reprehenderit eius ad quibusdam facere, at nobis quam rerum in, eligendi aperiam modi a placeat?',
        //     'category_id' => 3,
        //     'user_id' =>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke-empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, consequuntur.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quis dolorum, commodi amet in, similique nostrum velit quaerat harum, earum autem molestiae pariatur laudantium eum aliquid accusantium placeat neque voluptatem soluta expedita culpa! Sed, facilis reiciendis itaque similique laudantium fugit debitis tempora odit reprehenderit iusto eligendi, nulla. Tempora sit ullam amet accusamus. Dolorum quam sint cupiditate dolores doloribus tempora sed autem, optio sit asperiores quae iste itaque quos dignissimos quasi fuga illum repellat? Ipsam in vero minima error quod natus labore! Excepturi quisquam doloremque perferendis voluptatem delectus praesentium culpa voluptas est corporis optio eos eligendi, facilis iusto natus inventore laudantium, et libero, cum provident. Praesentium tempora quas reiciendis reprehenderit nemo soluta, quae iure dolor et, accusantium quo, repellendus nesciunt? Autem deserunt, molestiae sint quae impedit maxime! Nostrum sequi odit, temporibus sunt perspiciatis perferendis, aliquam obcaecati reprehenderit eius ad quibusdam facere, at nobis quam rerum in, eligendi aperiam modi a placeat?',
        //     'category_id' => 3,
        //     'user_id' =>1
        // ]);
        Post::factory(20)->create();
    }
}
