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
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('role')->index()->default(3);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->unsignedBigInteger('branch')->index()->default(1);
            $table->unsignedBigInteger('status')->index()->default(1);
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role')->references('id')->on('roles')->onUpdate('cascade')->onDelete("cascade");
            $table->foreign('branch')->references('id')->on('branches')->onUpdate('cascade')->onDelete("cascade");
            $table->foreign('status')->references('id')->on('status')->onUpdate('cascade')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
