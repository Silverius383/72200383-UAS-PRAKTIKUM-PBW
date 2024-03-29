<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++)
        {
            DB::table('dosen')->insert([
                'nidosen' => $faker->nik(),
                'nama' => $faker->name(),
                'status' => $faker->suffix(),
                'pakar' => $faker->jobTitle()
            ]);
        }
    }
}
