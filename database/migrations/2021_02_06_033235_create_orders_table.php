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
            $table->string('name', 50);
            $table->string('mobile', 50);
            $table->string('address', 50);
            $table->string('city', 50);
            $table->string('email', 50);
            $table->string('postcode', 50)->nullable();
            $table->string('Cash_On_Delivery', 50);//->nullable();
            $table->string('coupon', 50)->nullable();
            $table->string('invoice_number', 50)->nullable();
            $table->double('subtotal', 15, 2);//->nullable();
            $table->double('discount', 8, 2)->nullable();
            $table->double('grandtotal', 15, 2)->nullable();
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
