<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('termscondition');
            $table->timestamps();
        });

        DB::table('terms_conditions')->insert([
            'page_title' => 'Introduction to Laravel',
            'termscondition' => 'test descriptions',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms_conditions');
    }
}
