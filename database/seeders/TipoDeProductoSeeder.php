<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoDeProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_de_producto')->insert([
           	'nombre' => Str::random(10),
            'nombre' => FRUTA de Todo el año,
			'nombre' => FRUTA de Temporada,
			'nombre' => FRUTA de TemporadaVERDURA,
			'nombre' => FRUTA de TemporadaLEGUMINOSA,
			'nombre' => FRUTA de TemporadaCEREALES, 
         ]);
    }
}
