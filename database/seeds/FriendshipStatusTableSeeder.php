<?php

use Illuminate\Database\Seeder;

class FriendshipStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friendshipstatus')->insert([
            [
                'status_code' => 'accepted',
                'description' => 'The request to become a friend has been accepted'
            ],
            [
                'status_code' => 'request',
                'description' => 'A request has been sent to become a friend'
            ],
        ]);
    }
}
