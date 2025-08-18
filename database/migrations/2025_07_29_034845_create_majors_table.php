<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   
    public function up(): void
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id('mjr_id'); // primary key dengan prefix mjr_
            $table->string('mjr_name', 191);
            $table->unsignedBigInteger('mjr_created_by');
            $table->unsignedBigInteger('mjr_updated_by')->nullable();
            $table->unsignedBigInteger('mjr_deleted_by')->nullable();

            $table->timestamp('mjr_created_at')->useCurrent();
            $table->timestamp('mjr_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('mjr_deleted_at')->nullable();

            $table->text('mjr_sys_note')->nullable();

            // Foreign key constraints
            $table->foreign('mjr_created_by')->references('usr_id')->on('users');
            $table->foreign('mjr_updated_by')->references('usr_id')->on('users');
            $table->foreign('mjr_deleted_by')->references('usr_id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
