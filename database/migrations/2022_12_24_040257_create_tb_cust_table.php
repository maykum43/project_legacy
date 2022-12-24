<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cust', function (Blueprint $table) {
            $table->bigIncrements('id_cust');
            $table->string('nama_cust');
            $table->string('no_tlp');
            $table->string('alamat');
            $table->string('jenis_cust');
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
        Schema::dropIfExists('tb_cust');
    }
}
