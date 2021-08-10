<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loja_id');
            $table->foreignId('users_id');
            $table->foreignId('endereco_id');
            $table->string('note', 100);
            $table->string('cpf', 11)->nullable()->default(null);
            $table->float('price', 10,2);
            $table->float('discount', 10,2)->nullable()->default(null);
            $table->foreignId('cupom_id')->nullable()->default(null);
            $table->boolean('accept')->nullable()->default(null);
            $table->string('reason_refusal', 255)->nullable()->default(null);
            $table->boolean('delivery');
            $table->foreignId('status_pedido_id')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('pedidos');
    }
}
