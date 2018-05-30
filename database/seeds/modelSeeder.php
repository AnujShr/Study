<?php

use App\CarModel;
use Illuminate\Database\Seeder;

class modelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarModel::truncate();
        foreach (range(0, 5) as $index) {
            CarModel::insert([
                'name' => $index,
            ]);
        }
    }
}
