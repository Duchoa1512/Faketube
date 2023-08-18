<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\channel;

class channelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //khoi tao doi tuong faker
        $faker = Faker::create();

        for($i=0;$i<10;$i++){
            Faker::create([
                'Name'=> $faker->sentence(6,true),
                'Description'=>$faker->sentence(10,true),
                'SubscribersCount'=>$faker->sentence(6,true),
                'URL'=>$faker->sentence(10,true),
            ]);
        }
    }
}
