<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 29; $i++) {

            // generate nama
            $namadepan = $faker->firstName;

            // Insert data ke database
            DB::table('user')->insert([
                'USERNAME' => $namadepan,
                'PASSWORD' => bcrypt(substr(str_replace(' ', '',strtolower($namadepan)),0,20)),
                'STATUS' => 1
            ]);
        }
    }
}
