<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $legal_areas = [
            ['position' => 1,
                'name' => 'Immigration ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 2,
                'name' => 'Securities and Finance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 3,
                'name' => 'Labor & Employment ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 4,
                'name' => 'Entertainment ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 5,
                'name' => 'Personal Injury ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 6,
                'name' => 'Real Estate',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 7,
                'name' => 'Insurance ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ['position' => 8,
                'name' => 'Intellectual Property',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('legal_areas')->insert($legal_areas);
    }
}
