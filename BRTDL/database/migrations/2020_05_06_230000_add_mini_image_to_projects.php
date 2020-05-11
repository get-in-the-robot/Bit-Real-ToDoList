<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMiniImageToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('symbol');
            $table->string('simage')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTc1YfscFd2T4vQEBWF4vPcsag3U2UUDDnapuqM2eY93ogtciIk&usqp=CAU');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('simage');
            $table->tinyInteger('symbol');
        });
    }
}
