<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosConUnProductorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_con_un_productor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('productor_id')->constrained('productores');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_con_un_productor');
    }
}
