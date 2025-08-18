<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id('cls_id'); // ubah primary key juga jadi cls_id kalau mau konsisten

            $table->string('cls_level', 191); // contoh: "X", "XI", "XII"
            $table->unsignedBigInteger('cls_major_id'); // FK ke majors
            $table->unsignedBigInteger('cls_number'); // nomor kelas: 1,2,3 dst

            $table->unsignedBigInteger('cls_created_by');
            $table->unsignedBigInteger('cls_updated_by')->nullable();
            $table->unsignedBigInteger('cls_deleted_by')->nullable();

            $table->timestamp('cls_created_at')->useCurrent();
            $table->timestamp('cls_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('cls_deleted_at')->nullable();

            $table->text('cls_sys_note')->nullable();

            // Foreign keys
         $table->foreign('cls_major_id')->references('mjr_id')->on('majors');

            $table->foreign('cls_created_by')->references('usr_id')->on('users');
            $table->foreign('cls_updated_by')->references('usr_id')->on('users');
            $table->foreign('cls_deleted_by')->references('usr_id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
}
