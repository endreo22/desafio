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
            $table->integer('branch_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('email');
            $table->date('birth_date')->nullable();
            $table->string('genre')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->integer('number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('role')->nullable();
            $table->double('salary', 10, 2)->nullable();
            $table->string('status')->nullable();
            $table->string('cpf');
            $table->string('password')->nullable();
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
