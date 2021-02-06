<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name', 20);
            $table->string('mobile', 20);
            $table->string('address', 20);
            $table->string('city', 20);
            $table->string('email', 20);
            $table->string('postcode', 20);
            $table->string('coupon', 20);
            $table->string('invoice_number', 20);
            $table->double('subtotal', 15, 2);
            $table->double('discount', 8, 2)->nullable();
            $table->double('grandtotal', 15, 2);
            $table->double('vat', 8, 2)->nullable();
            $table->date('date')->nullable();
            $table->text('comments')->nullable();
            $table->Integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('creator_user_id')->nullable();
            $table->foreign('creator_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('updator_user_id')->nullable();
            $table->foreign('updator_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
