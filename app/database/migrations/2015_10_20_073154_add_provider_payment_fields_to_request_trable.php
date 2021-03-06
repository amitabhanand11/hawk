<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderPaymentFieldsToRequestTrable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('request', function(Blueprint $table) {
            $table->double('payment_remaining', 15, 2)->default(0);
            $table->double('refund_remaining', 15, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('request', function(Blueprint $table) {
            $table->dropColumn('payment_remaining');
            $table->dropColumn('refund_remaining');
        });
    }

}
