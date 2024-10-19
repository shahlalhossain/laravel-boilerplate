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
        Schema::create('about', function (Blueprint $table) {
            $table->id();

            $table->string('lang')->default('en'); //en/bn
            $table->string('title');
            $table->longText('about');
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('missions', function (Blueprint $table) {
            $table->id();

            $table->string('lang')->default('en'); //en/bn
            $table->string('title')->nullable();
            $table->longText('missions');
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('visions', function (Blueprint $table) {
            $table->id();

            $table->string('lang')->default('en'); //en/bn
            $table->string('title')->nullable();
            $table->longText('visions');
            $table->string('image')->nullable();
            $table->boolean('active')->default(true);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('contact', function (Blueprint $table) {
            $table->id();

            $table->string('lang')->default('en'); //en/bn
            $table->text('contact_info')->nullable();
            $table->string('mobiles')->nullable();
            $table->string('emails')->nullable();
            $table->string('websites')->nullable();

            $table->boolean('active')->default(true);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
        Schema::dropIfExists('missions');
        Schema::dropIfExists('visions');
        Schema::dropIfExists('contact');
    }
};
