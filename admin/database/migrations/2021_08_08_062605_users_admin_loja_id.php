<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersAdminLojaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_admin', function (Blueprint $table) {
            $table->foreignId('loja_id');
            $table->foreignId('endereco_id')->nullable();
            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropColumns('loja_id');
        Schema::dropColumns('endereco_id');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
