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
        Schema::create('sliders', function (Blueprint $table) {
            $table->integer('id', true)->index('id');
            $table->string('name');
            $table->integer('lang')->default(1);
            $table->text('title')->nullable();
            $table->longText('desc_slide')->nullable();
            $table->longText('img')->nullable();
            $table->text('icon')->nullable();
            $table->integer('isavisable')->nullable()->default(1);
            $table->integer('type')->nullable()->default(0);
            $table->text('urlvideo')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
