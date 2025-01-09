<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('salesmen', function (Blueprint $table) {
            $table->id('salesman_id');
            $table->string('salesman_name');
            $table->string('salesman_city');
            $table->decimal('commission', 5, 2); 
            $table->timestamps();
        });
    }
};
