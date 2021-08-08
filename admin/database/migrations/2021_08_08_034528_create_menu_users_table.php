<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_admin_id');
            $table->foreignId('menus_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('users_admin_id')->references('id')->on('users_admin');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('users_admin_id');
        Schema::dropForeign('menus_id');
        Schema::dropIfExists('menu_users');
    }
}
