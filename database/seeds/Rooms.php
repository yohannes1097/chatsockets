<?php

use Illuminate\Database\Seeder;

class Rooms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'id_creator' => '1',
            'room_name' => 'Ada Admin',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);
        DB::table('rooms')->insert([
            'id_creator' => '2',
            'room_name' => 'Room User 1',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);

        DB::table('room_members')->insert([
            'id_room' => '1',
            'id_member' => '1',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);
        DB::table('room_members')->insert([
            'id_room' => '2',
            'id_member' => '2',
            'created_at' => '2019-10-19 00:00:00',
            'updated_at' => '2019-10-19 00:00:00',
        ]);
    }
}
