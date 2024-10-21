<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundPolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_policy', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('refundpolicy');
            $table->timestamps();
        });

        DB::table('refund_policy')->insert([
            'page_title' => 'Introduction to Laravel',
            'refundpolicy' => 'test descriptions',
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
        Schema::dropIfExists('refund_policy');
    }
}
