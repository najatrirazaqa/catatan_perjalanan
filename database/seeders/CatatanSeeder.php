<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CatatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('catatans')->insert([
        //     'tanggal' => '2022-01-30',
        //     'waktu' => '17:00:01',
        //     'lokasi' => 'Bandung',
        //     'suhu_tubuh' => 33,
        // ]);
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 1000; $i++) {
            DB::table('catatans')->insert([
                'tanggal' => $faker->date,
                'waktu' => $faker->time,
                'lokasi' => $faker->city,
                'suhu_tubuh' => $faker->numberBetween(36, 38)
            ]);
        }
    }
}
