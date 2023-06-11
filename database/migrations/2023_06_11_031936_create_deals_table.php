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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("internalName");
            $table->string("title");
            $table->string("metacriticLink");
            $table->integer("dealID");
            $table->integer("storeID");
            $table->integer("gameID");
            $table->float("salePrice");
            $table->float("normalPrice");
            $table->boolean("isOnSale");
            $table->float("savings");
            $table->integer("metacriticScore");
            $table->string("steamRatingText");
            $table->integer("steamRatingPercent");
            $table->integer("steamRatingCount");
            $table->integer("steamAppID");
            $table->integer("releaseDate");
            $table->integer("lastChange");
            $table->float("dealRating");
            $table->string("thumb");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
};
