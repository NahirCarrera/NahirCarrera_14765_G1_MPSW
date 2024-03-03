<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosPorOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_por_orden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad')->default('0')->nullable();
            $table->timestamps();

            $table->foreign('orden_id')
                ->references('id')
                ->on('agenda')
                ->onDelete('cascade');

            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos_por_orden', function (Blueprint $table) {
            // Eliminar la restricción de clave externa
            $table->dropForeign(['orden_id']);
            $table->dropForeign(['producto_id']);
            // Eliminar la columna
            $table->dropColumn('orden_id');
            $table->dropColumn('producto_id');
        });
        Schema::dropIfExists('productos_por_orden');
    }
}
