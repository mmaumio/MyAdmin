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
        DB::table('owner_users')->insert([
            'username' => 'sayeed',
            'password' => Hash::make('testpass'),
        ]);

        DB::table('owner_users')->insert([
            'username' => 'aumio',
            'password' => Hash::make('testpass'),
        ]);
    }
}
