<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->unsignedBigInteger('state_id')->index()->default(1);
            $table->string('customer_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone')->nullable();
            $table->double('price')->nullable();
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};