<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateF1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f1s', function (Blueprint $table) {
            $table->string('sid');
            $table->mediumText('address');
            $table->string('name');
            $table->string('hphone');
            $table->string('mphone');
            $table->string('eaddress');
            $table->string('sem');
            $table->string('year');
            $table->string('cgpa');
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
        Schema::dropIfExists('f1s');
    }
}
