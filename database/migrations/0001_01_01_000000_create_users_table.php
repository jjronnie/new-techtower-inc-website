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

    // Identity
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password')->nullable(); // nullable for social login users

    // Auth providers
    $table->string('auth_provider')->default('email'); 
    // email, google, microsoft, facebook

    $table->string('provider_id')->nullable(); 
    // google_id, microsoft_id, facebook_id equivalent

    // Security
    $table->boolean('mfa_enabled')->default(false);
    $table->timestamp('last_login_at')->nullable();

    // Account status
    $table->enum('status', ['active', 'suspended'])->default('active');

    $table->rememberToken();
    $table->timestamps();
    $table->softDeletes();

    $table->index(['auth_provider', 'provider_id']);
});


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
