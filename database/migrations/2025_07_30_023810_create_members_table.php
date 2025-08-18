<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('mbr_id'); // primary key dengan prefix mbr_

            $table->unsignedBigInteger('mbr_user_id'); // FK ke users
            $table->unsignedBigInteger('mbr_extracuriculler_id'); // FK ke extracuricullers

            $table->unsignedBigInteger('mbr_created_by');
            $table->unsignedBigInteger('mbr_updated_by')->nullable();
            $table->unsignedBigInteger('mbr_deleted_by')->nullable();

            $table->timestamp('mbr_created_at')->useCurrent();
            $table->timestamp('mbr_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('mbr_deleted_at')->nullable();

            $table->string('mbr_sys_note')->nullable();

            // Foreign keys
            $table->foreign('mbr_user_id')->references('usr_id')->on('users');
            $table->foreign('mbr_extracuriculler_id')->references('ext_id')->on('extracuricullers');
            $table->foreign('mbr_created_by')->references('usr_id')->on('users');
            $table->foreign('mbr_updated_by')->references('usr_id')->on('users');
            $table->foreign('mbr_deleted_by')->references('usr_id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
