<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jon Ibigood',
            'email' => 'jbg.@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'Anne Nonyme',
            'email' => 'anonyme.@anonyme.anonyme',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin.@admin.admin',
            'password' => bcrypt('admin0000'),
        ]);
    }
}
