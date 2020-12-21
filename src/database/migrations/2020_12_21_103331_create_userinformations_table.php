<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinformations', function (Blueprint $table) {
            $table->id();
            $table->string('user_type');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_contact');
            $table->string('user_school');
            $table->string('user_college');
            $table->string('user_university');
            $table->string('user_present_address');
            $table->string('user_permanent_address');
            $table->string('user_profession');
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
        Schema::dropIfExists('userinformations');
    }
}
