<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestImages extends Migration
{
    protected $table = 'quest_images';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('thumbnail');
            $table->tinyInteger('for_display')->default(0);;
            $table->integer('quest_id')->unsigned()->index();
            $table->foreign('quest_id')->references('id')->on('quests')->onDelete('cascade');
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
        Schema::dropIfExists($this->table);
    }
}
