<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MyCountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('countries')->insert(array (
            0 =>
                array (
                    'id' => (string) Str::uuid(),
                    'name' => 'AFGHANISTAN',
                    
                ),
            1 =>
                array (
                    'id' => (string) Str::uuid(),
                    'name' => 'UNITED STATES OF AMERICA',
                    
                ),
            2 =>
                array (
                    'id' => (string) Str::uuid(),
                    'name' => 'SPAIN',
                ),
            3 =>
                array (
                    'id' => (string) Str::uuid(),
                    'name' => 'UNITED KINGDOM',
                   
                ),
            4 =>
                array (
                    'id' => (string) Str::uuid(),
                    'name' => 'CANADA',
                    
                ),
            5 =>
                array (
                    'id' => (string) Str::uuid(),
                    'name' => 'GERMANY',
                ),
         ));
    }
}
