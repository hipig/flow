<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('category_id')->nullable()->comment('分类ID');
            $table->unsignedBigInteger('user_id')->comment('用户ID');
            $table->string('title')->index()->comment('标题');
            $table->string('slug')->nullable()->comment('slug');
            $table->string('cover')->nullable()->comment('封面');
            $table->text('body')->comment('内容');
            $table->string('seo_title')->nullable()->comment('SEO标题');
            $table->string('seo_keywords')->nullable()->comment('SEO关键词');
            $table->string('seo_description')->nullable()->comment('SEO描述');
            $table->boolean('status')->default(true)->comment('状态');
            $table->timestamp('published_at')->nullable()->comment('发布时间');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
