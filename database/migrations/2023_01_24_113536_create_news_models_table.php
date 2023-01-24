<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_models', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->integer('lang')->nullable()->default(1);
            $table->text('desc_news')->nullable();
            $table->text('img_news')->nullable();
            $table->longText('details_news')->nullable();
            $table->text('byname')->nullable();
            $table->integer('active')->nullable()->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_models');
    }
};
