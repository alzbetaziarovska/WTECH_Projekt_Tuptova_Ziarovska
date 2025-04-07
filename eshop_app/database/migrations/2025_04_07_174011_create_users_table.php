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
            $table->id(); // bigserial PRIMARY KEY
            $table->string('f_name', 512); // f_name varchar(512) NOT NULL
            $table->string('l_name', 512); // l_name varchar(512) NOT NULL
            $table->text('email')->unique(); // email text NOT NULL UNIQUE
            $table->string('password', 128); // password varchar(128) NOT NULL
            $table->boolean('is_admin'); // is_admin boolean NOT NULL
            $table->boolean('newsletter'); // newsletter boolean NOT NULL
            $table->timestamps(); // created_at, updated_at (optional but standard in Laravel)
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
