<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->enum('type', [User::TYPE_ADMIN, User::TYPE_AUTHOR, User::TYPE_USER])->default(User::TYPE_USER);

            $table->string('name')->nullable();

            $table->string('username')->unique();

            $table->string('mobile')->unique()->nullable();
            $table->boolean('is_mobile_verified')->default(false);
            $table->timestamp('mobile_verified_at')->nullable();

            $table->string('email')->unique()->nullable();
            $table->boolean('is_email_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password')->nullable();

            $table->unsignedTinyInteger('active')->default(1);

            $table->string('registration_platform')->nullable();

            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('occupation')->nullable();
            $table->string('marital_status')->nullable();

            $table->string('city_name')->nullable();
            $table->text('address')->nullable();
            $table->string('timezone')->nullable();

            $table->string('image_path')->nullable();

            $table->rememberToken();
            $table->string('api_token')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
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

        Schema::create('password_change_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->timestamp('last_password_changed_at')->nullable();
            $table->integer('password_change_count')->default(0);
            $table->json('old_passwords')->nullable();
        });

        Schema::create('password_reset_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->timestamp('last_password_reset_at')->nullable();
            $table->integer('password_reset_count')->default(0);
            $table->string('password_reset_via')->nullable(); // [Email+OTP or Mobile+OTP or Email+Reset Password Link/Token]
        });

        Schema::create('login_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('last_login_os')->nullable();
            $table->string('last_login_agent')->nullable(); // Browser/App Name
            $table->boolean('logged_out')->default(0);
            $table->timestamp('logout_at')->nullable();
        });

        Schema::create('activity_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('user_type', [User::TYPE_ADMIN, User::TYPE_AUTHOR, User::TYPE_USER])->default(User::TYPE_USER);
            $table->unsignedBigInteger('user_id')->nullable();

            $table->string('action')->nullable(); // Search/Filter/List/Details/Create/Edit Page View or Store/Update/Delete Action Taken
            $table->string('content')->nullable(); // User/Article/Comment
            $table->string('operating_system')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable(); // Browser/App Name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
        Schema::dropIfExists('login_history');
        Schema::dropIfExists('password_reset_history');
        Schema::dropIfExists('password_change_history');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
