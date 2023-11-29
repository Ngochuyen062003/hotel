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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('room_id')->nullable();
            $table->integer('adults')->unsigned();
            $table->integer('children')->unsigned();
            $table->decimal('surcharge', 10, 3)->default(0.000);//phụ thu - chi phí phát sinh(nếu có)
            $table->decimal('total_amount', 10, 3)->default(0.000);
            $table->date('start_date');
            $table->date('end_date');

            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
