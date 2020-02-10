<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
			$table->bigIncrements('idsiswa');
			$table->string('namasiswa');
			$table->string('kelas');
			$table->string('angkatan');
			$table->string('no_hp');
			$table->string('email');
			$table->string('alamat');
			$table->string('idguru');
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
        Schema::dropIfExists('siswas');
    }
}
