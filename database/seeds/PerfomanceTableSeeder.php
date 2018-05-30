<?php

use App\Performance;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PerfomanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Performance::truncate();
        $i = 0;
        foreach (range(0, 5) as $index) {
            Performance::insert([
                'revenue' => substr(str_shuffle("0123456789"), 0, 5),
                'new_users' => $index,
                'users' => $index + 5,
                'created_at' => Carbon::parse('2017-05-12')->addDays($index + $i)
            ]);
            $i = $i + 25;
        }
        $i = 0;
        foreach (range(0, 30) as $index) {
            Performance::insert([
                'revenue' => substr(str_shuffle("0123456789"), 0, 5),
                'new_users' => $index,
                'users' => $index + 5,
                'created_at' => Carbon::now()->addDays($index + $i)
            ]);
            $i = $i + 14;
        }
    }
}
