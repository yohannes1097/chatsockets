<?php

use Illuminate\Database\Seeder;

class userData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => Hash::make('pwdadmin'),
            'level' => 'admin',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1'.'@gmail.com',
            'password' => Hash::make('pwduser1'),
            'level' => 'user',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2'.'@gmail.com',
            'password' => Hash::make('pwduser2'),
            'level' => 'user',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);
    }
}
