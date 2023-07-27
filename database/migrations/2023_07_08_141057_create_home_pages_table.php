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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->text('heroText');
            $table->text('fistServiceDescription');
            $table->text('secondServiceDescription');
            $table->text('thirdServiceDescription');
            $table->text('fourthServiceDescription');
            $table->text('firstOurShows');

            $table->text('secondOurShows');
            $table->text('thirdOurShows');

            $table->text('firstOurShowsDescription');
            $table->text('secondOurShowsDescription');
            $table->text('thirdOurShowsDescription');

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
        Schema::dropIfExists('home_pages');
    }
};
