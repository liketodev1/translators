<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['Animal Law',
            'Admiralty Law',
            'Bankruptcy Law',
            'Banking and Finance Law',
            'Civil Rights Law',
            'Constitutional Law',
            'Corporate Law',
            'Criminal Law',
            'Labor & Employment Law',
            'Education Law',
            'Entertainment Law',
            'Environmental & Natural Resources Law',
            'Family Law',
            'Health Law',
            'Immigration Law',
            'International Law',
            'Intellectual Property Law',
            'Insurance Law',
            'Military Law',
            'Personal Injury Law',
            'Real Estate Law',
            'Securities and Finance Law',
            'Tax Law',
            'Wills & Trust Law',];

        $specializations = array();
        foreach ($items as $item => $value) {
            $specializations[$item]['position'] = $item;
            $specializations[$item]['name'] = $value;
            $specializations[$item]['created_at'] = Carbon::now();
            $specializations[$item]['updated_at'] = Carbon::now();
        }

        DB::table('specializations')->insert($specializations);
    }
}
