<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('courses')->insert([
                'course_id'=>'1',
                'name'=>'Khóa cơ bản',
                'level'=>'1',
                'discription'=>'none',
                'link'=>'none',
                'number-lession'=>'0',
                'type'=>'basic',


        ]);
        }
        
    }

  