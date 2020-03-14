<?php

namespace Ecoflow\Shop\Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'name' => "Default",
            'desc' => "A Default Product",
            'created_at' => Carbon::now()
        ]);

        DB::table('product_types')->insert([
            'name' => "Downloadable",
            'desc' => "A Downloadable Product",
            'created_at' => Carbon::now()
        ]);
    }
}
