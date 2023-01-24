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
        Schema::create('aboutusinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique('generalinfo_name_unique');
            $table->string('lang')->nullable();
            $table->timestamps();
            $table->string('aboutus_word')->nullable();
            $table->text('aboutus_text')->nullable();
            $table->string('whoweare_word')->nullable();
            $table->text('whoweare_text')->nullable();
            $table->string('ourvision_word')->nullable();
            $table->text('ourvision_text')->nullable();
            $table->string('ourhistory_word')->nullable();
            $table->text('ourhistory_text')->nullable();
            $table->text('img_about')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutusinfo');
    }
};
