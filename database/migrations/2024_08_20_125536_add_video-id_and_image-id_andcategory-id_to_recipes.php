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

        if (! Schema::hasColumn('recipes', 'video_id')) {
            Schema::table('recipes', function (Blueprint $table) {
                $table->bigInteger('video_id')->unsigned();
                $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            });
        }

        if (! Schema::hasColumn('recipes', 'image_id')) {
            Schema::table('recipes', function (Blueprint $table) {
                $table->bigInteger('image_id')->unsigned();
                $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            });
        }

        if (! Schema::hasColumn('recipes', 'category_id')) {
            Schema::table('recipes', function (Blueprint $table) {
                $table->bigInteger('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('video_id');
        });

        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('image_id');
        });

        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
};
