<?php

// namespace Ecoflow\Shop\Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_units')->insert([
            'name' => 'kg',
            'desc' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('product_units')->insert([
            'name' => 'gr',
            'desc' => '',
            'created_at' => Carbon::now()
        ]);

        DB::table('product_units')->insert([
            'name' => 'unit',
            'desc' => '',
            'created_at' => Carbon::now()
        ]);
    }
}
