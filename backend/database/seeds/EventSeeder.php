<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'name1',
            'description' => 'participants',
            'moderator' => 'st',
            'prizes' => 10000,
            'rules' => 'rule'
        ]);
    }
}
