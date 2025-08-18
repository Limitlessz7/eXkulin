<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id('frm_id'); // Primary key dengan prefix

            $table->text('frm_content')->nullable();

            // Foreign key ke extracuricullers
            $table->unsignedBigInteger('frm_extracuriculler_id');
            $table->foreign('frm_extracuriculler_id')
                  ->references('ext_id')  // pastikan extracuricullers primary key bernama ext_id
                  ->on('extracuricullers')
                  ->onDelete('cascade');

            // Foreign key ke users (dengan custom PK usr_id)
            $table->unsignedBigInteger('frm_user_id');
            $table->foreign('frm_user_id')
                  ->references('usr_id')
                  ->on('users')
                  ->onDelete('cascade');

            // Status form enum 1=pending, 2=approved, 3=rejected (misal)
            $table->enum('frm_status', ['1', '2', '3'])->default('1');
            $table->text('frm_reason')->nullable();

            // Audit trail FK ke users
            $table->unsignedBigInteger('frm_created_by');
            $table->foreign('frm_created_by')
                  ->references('usr_id')
                  ->on('users');

            $table->unsignedBigInteger('frm_updated_by')->nullable();
            $table->foreign('frm_updated_by')
                  ->references('usr_id')
                  ->on('users');

            $table->unsignedBigInteger('frm_deleted_by')->nullable();
            $table->foreign('frm_deleted_by')
                  ->references('usr_id')
                  ->on('users');

            // Timestamps dengan prefix
            $table->timestamp('frm_created_at')->useCurrent();
            $table->timestamp('frm_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('frm_deleted_at')->nullable();

            $table->text('frm_sys_note')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
