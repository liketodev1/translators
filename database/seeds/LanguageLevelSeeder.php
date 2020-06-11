<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageLevelSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Beginner',
            'Elementary',
            'Intermediate',
            'Upper Intermediate',
            'Advanced',
            'Proficient'
        ];

        $levels = array();
        foreach ($items as $item => $value) {
            $levels[$item]['position'] = $item;
            $levels[$item]['name'] = $value;
            $levels[$item]['created_at'] = Carbon::now();
            $levels[$item]['updated_at'] = Carbon::now();
        }

        DB::table('language_levels')->insert($levels);
    }
}
