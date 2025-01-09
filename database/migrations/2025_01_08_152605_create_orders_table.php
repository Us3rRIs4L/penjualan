<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->date('order_date');
            $table->decimal('amount', 10, 2); 
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('salesman_id');
            $table->unsignedBigInteger('customer_id');

            $table->foreign('salesman_id')
                ->references('salesman_id')
                ->on('salesmen')
                ->onDelete('cascade');

            $table->foreign('customer_id')
                ->references('customer_id')
                ->on('customers')
                ->onDelete('cascade');
        });
    }
};
