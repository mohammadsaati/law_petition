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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->unsignedBigInteger("category_id");
            $table->string("image")->nullable();
            $table->string("type");
            $table->integer("rate")->default(2);
            $table->integer("status")->default(1);
            $table->text("description");
            $table->timestamps();

            $table->foreign("category_id")->on("categories")->references("id")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
