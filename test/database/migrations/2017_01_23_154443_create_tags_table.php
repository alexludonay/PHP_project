<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string("nom");
            $table->timestamps();
        });

        Schema::create('user_tag', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->integer("user_id")->unsigned();
            $table->integer("tag_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("tag_id")->references("id")->on("tags")->onDelete("cascade")->onUpdate("cascade");
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        Schema::dropIfExists('tags');
        Schema::dropIfExists('user_tag');
    }
}
