<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('branch_id');
            $table->string('name');
            $table->string('email');
            $table->date('birth_date');
            $table->string('genre');
            $table->string('address');
            $table->string('district');
            $table->integer('number');
            $table->string('city');
            $table->string('state');
            $table->string('role');
            $table->double('salary', 10, 2);
            $table->string('status');
            $table->string('cpf');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
