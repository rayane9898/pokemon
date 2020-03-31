<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            'type' => Str::random(10),
        ]);
    }
}
