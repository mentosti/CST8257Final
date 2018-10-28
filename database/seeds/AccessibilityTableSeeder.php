<?php

use Illuminate\Database\Seeder;

class AccessibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accessibility')->insert([
            [
                'accessibility_code' => 'private',
                'description' => 'Accessible only by the owner'
            ],
            [
                'accessibility_code' => 'shared',
                'description' => 'Accessible by the owner and friends'
            ],
        ]);
    }
}
