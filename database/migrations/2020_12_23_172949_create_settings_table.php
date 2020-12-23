<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('label')->comment('名称');
            $table->string('key')->comment('标识');
            $table->text('value')->nullable()->comment('配置值');
            $table->string('group')->comment('分组');
            $table->string('type')->default(\App\Models\Setting::TYPE_INPUT)->comment('表单类型');
            $table->json('extra')->nullable()->comment('额外配置');
            $table->boolean('status')->default(true)->comment('状态');
            $table->integer('index')->default(0)->comment('排序');
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
        Schema::dropIfExists('settings');
    }
}
