<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campuses')->insert(array(
            array(
                'name' => "Broadmeadows",
                'active' => 1,
            ),
            array(
                'name' => "Campbellfield",
                'active' => 1,
            ),
            array(
                'name' => "Coolaroo",
                'active' => 1,
            ),
            array(
                'name' => "Craigieburn",
                'active' => 1,
            ),
            array(
                'name' => "Werribee",
                'active' => 1,
            ),
            array(
                'name' => "Attwood",
                'active' => 1,
            ),
            array(
                'name' => "Preston",
                'active' => 1,
            ),
            array(
                'name' => "Fawkner",
                'active' => 1,
            ),
            array(
                'name' => "Footscary",
                'active' => 1,
            ),
            array(
                'name' => "Shepparton",
                'active' => 1,
            ),
        ));
    }
}
