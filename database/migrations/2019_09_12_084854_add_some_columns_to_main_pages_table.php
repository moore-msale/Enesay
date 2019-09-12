<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsToMainPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_pages', function (Blueprint $table) {
            $table->string('locate6')->nullable();
            $table->string('locate_img6')->nullable();
            $table->string('locate7')->nullable();
            $table->string('locate_img7')->nullable();
            $table->string('locate8')->nullable();
            $table->string('locate_img8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_pages', function (Blueprint $table) {
            $table->dropColumn(['locate6', 'locate_img6', 'locate7', 'locate_img7', 'locate8', 'locate_img8']);

        });
    }
}
