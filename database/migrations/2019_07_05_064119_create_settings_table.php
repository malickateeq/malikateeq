<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('bg_image')->nullable();
            $table->string('favicon')->nullable();
            $table->string('title')->nullable();

            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('one_liner')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            
            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('other_links')->nullable();
            
            $table->string('btn1_text')->nullable();
            $table->string('btn1_link')->nullable();

            
            $table->string('btn2_text')->nullable();
            $table->string('btn2_link')->nullable();

            
            $table->string('btn3_text')->nullable();
            $table->string('btn3_link')->nullable();

            $table->timestamps();
        });
        $configuration =[
            [
                'name' => "malik ateeq",
                'title' => "malik ateeq | y",
                'one_liner' => "Explorer.!!",
                'description' => "my description",
                'btn1_text' => "DARKEST",
                'btn2_text' => "PINTERESTED",
                'btn3_text' => "INCLUMBERS",
                'created_at' => date("Y-m-d H:i:s")
            ],
        ];

        DB::table('settings')->insert($configuration);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
