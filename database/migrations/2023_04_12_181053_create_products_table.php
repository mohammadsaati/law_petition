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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("code")->unique();
            $table->integer("price");
            $table->integer("off_price")->nullable();
            $table->dateTime("off_deadline")->nullable();
            $table->unsignedBigInteger("content_id");
            $table->timestamps();

            $table->foreign("content_id")->references("id")->on("contents")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
