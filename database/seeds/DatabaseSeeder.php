<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipeUserTableSeeder::class);
        $this->call(KelompokKegiatanTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(JenisKegiatanTableSeeder::class);
        $this->call(TingkatTableSeeder::class);
    }
}
