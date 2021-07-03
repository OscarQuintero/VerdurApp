<?php

namespace Database\Seeders;

use App\Models\TipoDeProducto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TipoDeProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_de_productos')->insert(['nombre' => 'FRUTA de Todo el año','ruta_de_imagen' => 'nd',]);
        DB::table('tipo_de_productos')->insert(['nombre' => 'FRUTA de Temporada','ruta_de_imagen' => 'nd',]);
		DB::table('tipo_de_productos')->insert(['nombre' => 'FRUTA de TemporadaVERDURA','ruta_de_imagen' => 'nd',]);
		DB::table('tipo_de_productos')->insert(['nombre' => 'FRUTA de TemporadaLEGUMINOSA','ruta_de_imagen' => 'nd',]);
		DB::table('tipo_de_productos')->insert(['nombre' => 'FRUTA de TemporadaCEREALES','ruta_de_imagen' => 'nd',]);
    }
}
