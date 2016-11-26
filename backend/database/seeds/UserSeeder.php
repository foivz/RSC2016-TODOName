<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use quizzes\Admin;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = Admin::create([
            'name' => 'matija',
            'email' => 'matija.vuk.97@gmail.com',
            'password' => Hash::make('password'),
            'admin_level' => '1',
        ]);
        $user->save();

    }
}
