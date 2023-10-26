<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('quizzes')->insert([
        'title' =>  'Quiz de Français',
        'subject' => 'Français',
        'question' => 'Quel est le mot français pour "Maison" ?',
        'options' => json_encode(['A' => 'House', 'B' => 'Maison', 'C' => 'Casa' , 'D' => 'Casalinga']),
        'correct_option' => 'B',
      ]);
    }
}
