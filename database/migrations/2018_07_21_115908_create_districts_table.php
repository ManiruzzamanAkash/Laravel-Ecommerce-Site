<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('districts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->unsignedInteger('division_id');
      $table->timestamps();

      $table->foreign('division_id')
      ->references('id')->on('divisions')
      ->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('districts');
  }
}
