<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('EventSeeder');
        $this->call('QuizSeeder');
        $this->call('TeamSeeder');
    }
}
