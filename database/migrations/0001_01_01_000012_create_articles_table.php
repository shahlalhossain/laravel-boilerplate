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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('author_id');

            $table->text('title');
            $table->longText('content');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();

            $table->boolean('active')->default(true);
            $table->string('status')->default('draft'); // Draft/On-Review/Published

            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('comments')->default(0);
            $table->double('ratings')->default(0.00);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description')->nullable();

            $table->boolean('active')->default(true);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description')->nullable();

            $table->unsignedInteger('parent_id')->nullable();

            $table->boolean('active')->default(true);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('article_id');
            $table->unsignedBigInteger('user_id');

            $table->string('comment');

            $table->boolean('active')->default(true);
            $table->string('status')->default('pending'); // Pending/Approved/Discard

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });

        Schema::create('article_tags', function (Blueprint $table) {
            $table->unsignedInteger('article_id');
            $table->unsignedBigInteger('tag_id');
        });

        Schema::create('article_categories', function (Blueprint $table) {
            $table->unsignedInteger('category_id');
            $table->unsignedBigInteger('article_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_categories');
        Schema::dropIfExists('article_tags');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('articles');
    }
};
