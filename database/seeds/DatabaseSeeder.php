<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        App\Category::create(['title'=>'Public']);
        App\Category::create(['title'=>'Private']);
        App\Category::create(['title'=>'Family']);

        $faker = Faker\Factory::create();
        
        foreach (range(1,100) as $index) {
            App\Post::create([
                'title'=>$faker->realText(30,2),
                'content'=>$faker->realText(100,2),
                'category_id'=> App\Category::all()->random()->id
                
            ]);
        }

        Model::reguard();
    }
}
