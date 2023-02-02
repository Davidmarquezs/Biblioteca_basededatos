<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table -> id();
            $table -> string('codigo', 10)->unique();
            $table -> string('nombre', 32);
            //$table -> string('categoria', 32);
            $table -> longtext('resenia') -> nullable();
            $table -> bigInteger('isbn');
            $table -> integer('cantidad');
            $table -> decimal('precio', 8, 2);
            $table -> string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
