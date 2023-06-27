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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('cources')->onDelete('set null')->onUpdate('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->boolean('gender');
            $table->date('age');
            $table->string('status');
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('language_id')->nullable();
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedBigInteger('last_updated_by')->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropForeign('course_id');
            $table->dropForeign('type_id');
            $table->dropForeign('language_id');
            $table->dropForeign('last_updated_by');
           });
        Schema::dropIfExists('leads');
    }
};
