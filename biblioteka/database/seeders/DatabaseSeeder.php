<?php
namespace Database\Seeders;

use Faker\Factory as F;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = F::create('lt_LT');
        $time = Carbon::now();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'created_at' => $time,
            'updated_at' => $time,  
            ]);

            DB::table('users')->insert([
                'name' => 'Reader',
                'email' => 'Reader@gmail.com',
                'password' => Hash::make('123'),
                'created_at' => $time,
                'updated_at' => $time,   
            ]);      
                
                
            foreach(['Romance', 'Adventure', 'Fantasy', 'Horror', 'Crime'] as $category){
                DB::table('categories')->insert([
                    'name' => $category,
                    'created_at' => $time->addSeconds(1),
                    'updated_at' => $time,
                ]);
            }

            foreach(['Crime and Punishment', 'Wuthering Heights', ' The Catcher in the Rye', 'Pride and Prejudice', 'The Adventures of Huckleberry Finn', 'Anna Karenina' ] as $book){
                DB::table('books')->insert([
                    'title' => $book,
                    'description' => $faker->text,
                    'ISBN' => rand(1000000,9999999),
                    'pages' => rand(100, 2000),
                    'category_id' => rand(1,5),
                    'created_at' => $time->addSeconds(1),
                    'updated_at' => $time,
                ]);
            }
    }
}
