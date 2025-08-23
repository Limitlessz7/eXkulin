<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('usr_id'); // PK

            $table->string('usr_name', 255);
            $table->string('usr_telephone', 13)->nullable();
            $table->string('usr_email', 255)->unique();

            $table->unsignedBigInteger('usr_roles_id')->nullable(); // FK ke roles
            $table->string('usr_password', 255);

            $table->boolean('usr_activation')->default(false);

            $table->unsignedBigInteger('usr_created_by')->nullable();
            $table->unsignedBigInteger('usr_updated_by')->nullable();
            $table->unsignedBigInteger('usr_deleted_by')->nullable();

            $table->timestamp('usr_created_at')->useCurrent();
            $table->timestamp('usr_updated_at')->nullable()->useCurrentOnUpdate();
            $table->timestamp('usr_deleted_at')->nullable();

            $table->text('usr_sys_note')->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
