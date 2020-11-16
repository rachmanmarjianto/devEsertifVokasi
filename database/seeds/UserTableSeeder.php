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

        // for ($i=1; $i < 30; $i++) {

        //     // generate username
        //     $username = 151811513000 + $i;

        //     // Insert data ke database
        //     DB::table('user')->insert([
        //         'nim' => $username,
        //         'ID_TIPE_USER' => 2,
        //         'PASSWORD' => bcrypt(substr(str_replace(' ', '',strtolower($username)),0,20)),
        //         'NAMA_USER' => $faker->firstName." ".$faker->lastName,
        //         'STATUS' => 1
        //     ]);
        // }

        // Insert data ke database
        DB::table('user')->insert([
            'nim' => 151811513000,
            'ID_TIPE_USER' => 1,
            'PASSWORD' => bcrypt(substr(str_replace(' ', '',strtolower(151811513000)),0,20)),
            'NAMA_USER' => 'Supri',
            'STATUS' => 1
        ]);
    }
}
