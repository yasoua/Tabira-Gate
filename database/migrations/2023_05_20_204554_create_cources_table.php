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
        Schema::create('cources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('set null')->onUpdate('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('picture');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->date('expire_at')->nullable();
            $table->string('public_link')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
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
        Schema::table('cources', function (Blueprint $table) {
            $table->dropForeign('service_id');
            $table->dropForeign('added_by');
            $table->dropForeign('last_updated_by');




        });
        Schema::dropIfExists('cources');
    }
};
