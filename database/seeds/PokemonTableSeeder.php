<?php

use Illuminate\Database\Seeder;
Use App\Type;
use Illuminate\Support\Str;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pokemon')->insert([
            'name' => Str::random(10),
            'img' => Str::random(10),
            'level' => rand(1, 100),
            'type_id' => Type::inRandomOrder()->first()->id,

        ]);
    }
}
