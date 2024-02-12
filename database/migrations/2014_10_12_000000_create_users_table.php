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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->nullable();
            $table->string('password', 128)->nullable(false);
            $table->string('erp_user_id', 50)->nullable();
            $table->integer('roles_id')->nullable();
            $table->integer('organization_id')->nullable();
            $table->boolean('is_tmm')->nullable()->default(false);
            $table->boolean('is_login_mobile')->nullable()->default(false);
            $table->string('fcm_token', 255)->nullable();
            $table->string('nik', 15)->nullable();
            $table->string('full_name', 150)->nullable();
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('phone', 50)->nullable(false);
            $table->string('image_url', 255)->nullable();
            $table->string('bank_name', 50)->nullable();
            $table->string('bank_account', 50)->nullable();
            $table->boolean('has_npwp')->nullable()->default(false);
            $table->string('address', 255)->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->string('created_by', 100)->nullable();
            $table->timestamp('created_on');
            $table->string('updated_by', 100)->nullable();
            $table->timestamp('updated_on')->nullable();

            // $table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};