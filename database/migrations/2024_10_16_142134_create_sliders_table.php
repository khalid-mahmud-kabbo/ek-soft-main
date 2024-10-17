<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image');            // For storing slider image
            $table->string('subtitle');         // For subtitle
            $table->string('title');            // For title
            $table->text('short_description');  // For short description
            $table->string('button_text');      // For button text
            $table->string('button_link');      // For button link
            $table->timestamps();               // For created_at and updated_at timestamps
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
}
