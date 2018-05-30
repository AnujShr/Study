<?php

use App\Car;
use App\CarModel;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = CarModel::all();
        foreach ($model as $m) {
            foreach (range(0, 5) as $index) {
                Car::insert([
                    'name' => $index + 6 + $m->id,
                    'car_model_id' => $m->id
                ]);
            }
        }
    }
}
