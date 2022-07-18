<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTextPricePaymentIdRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_requests', function (Blueprint $table) {
           $table->foreignId('payment_type_id')->constrained('payment_types')->onDelete('cascade')->onUpdate('cascade');
          //   $table->string('payment_type_id');


        });

        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_requests', function (Blueprint $table) {
            $table->dropColumn('payment_type_id');
        });
    }
}
