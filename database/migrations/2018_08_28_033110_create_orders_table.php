<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('user_id')->nullable();
      $table->unsignedInteger('payment_id')->nullable();
      $table->string('ip_address')->nullable();
      $table->string('name');
      $table->string('phone_no');
      $table->text('shipping_address');
      $table->string('email')->nullable();
      $table->text('message')->nullable();
      $table->boolean('is_paid')->default(0);
      $table->boolean('is_completed')->default(0);
      $table->boolean('is_seen_by_admin')->default(0);
      $table->string('transaction_id')->nullable();
      $table->timestamps();

      $table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');

      $table->foreign('payment_id')
      ->references('id')->on('payments')
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
    Schema::dropIfExists('orders');
  }
}
