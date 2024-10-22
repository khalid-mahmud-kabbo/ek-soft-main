<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Whoweare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whoweare', function (Blueprint $table) {
            $table->id();
            $table->string('AboutImage');
            $table->string('AboutSubImage')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('point_1');
            $table->string('point_2');
            $table->string('point_3');
            $table->string('point_4');
            $table->string('satisfied_clients');
            $table->string('finished_projects');
            $table->string('skilled_experts');
            $table->string('years_of_experience');
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
        Schema::dropIfExists('whoweare');
    }
}
