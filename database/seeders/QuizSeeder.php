<?php


// database/seeders/QuizSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for quizzes
        $quizzes = [
            ['title' => 'Math Quiz', 'description' => 'Test your math skills.'],
            ['title' => 'History Quiz', 'description' => 'Explore your knowledge of history.'],
            ['title' => 'Science Quiz', 'description' => 'Discover the wonders of science.'],
            ['title' => 'General Knowledge Quiz', 'description' => 'Test your general knowledge.'],
            ['title' => 'Programming Quiz', 'description' => 'Challenge your programming knowledge.'],
        ];

        // Insert data into the 'quizzes' table
        DB::table('quizzes')->insert($quizzes);
    }
}