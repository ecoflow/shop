<?php

namespace Ecoflow\Shop\Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'country' => "Tunisia",
            'name' => "Tunisian dinar",
            'iso' => "TND",
            'created_at' => Carbon::today()
        ]);

        DB::table('currencies')->insert([
            'country' => "France",
            'name' => "European euro",
            'iso' => "EUR",
            'created_at' => Carbon::today()
        ]);

        DB::table('currencies')->insert([
            'country' => "Morocco",
            'name' => "Moroccan dirham",
            'iso' => "MAD",
            'created_at' => Carbon::today()
        ]);

        DB::table('currencies')->insert([
            'country' => "Algeria",
            'name' => "Algerian dinar",
            'iso' => "DZD",
            'created_at' => Carbon::today()
        ]);

        DB::table('currencies')->insert([
            'country' => "United States of America",
            'name' => "United States dollar",
            'iso' => "USD",
            'created_at' => Carbon::today()
        ]);

        DB::table('currencies')->insert([
            'country' => "Canada",
            'name' => "Canadian dollar",
            'iso' => "CAD",
            'created_at' => Carbon::today()
        ]);
    }
}
