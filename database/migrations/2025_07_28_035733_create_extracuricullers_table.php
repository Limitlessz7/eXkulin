<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('extracuricullers', function (Blueprint $table) {
            $table->id('ext_id');
            $table->string('ext_name');
            $table->string('ext_status');
            $table->text('ext_description')->nullable();

            $table->unsignedBigInteger('ext_created_by')->nullable();
            $table->unsignedBigInteger('ext_updated_by')->nullable();
            $table->unsignedBigInteger('ext_deleted_by')->nullable();

            $table->timestamp('ext_created_at')->useCurrent();
            $table->timestamp('ext_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('ext_deleted_at')->nullable();

            $table->string('ext_sys_note', 255)->nullable();

            $table->foreign('ext_created_by')->references('usr_id')->on('users');
            $table->foreign('ext_updated_by')->references('usr_id')->on('users');
            $table->foreign('ext_deleted_by')->references('usr_id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('extracuricullers');
    }
};
