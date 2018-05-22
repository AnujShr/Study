<?php

use App\lesson;
use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
       $lessonIds = Lesson::pluck('id')->all();
       $tagsIds = Tag::pluck('id')->all();

       foreach(range(1,30) as $index){
           DB::table('lesson_tag')->insert([
               'lesson_id' =>$faker->randomElement($lessonIds),
               'tag_id' =>$faker->randomElement($tagsIds),
           ]);
       }
    }
}
