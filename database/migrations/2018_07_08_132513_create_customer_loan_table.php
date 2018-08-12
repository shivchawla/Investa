<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_loan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer ('loan_no');
            $table->float ('interest_rate');
            $table->float ('installment_amount');
            $table->integer ('no_of_installments');
            $table->date ('start_date');
            $table->date ('end_date');
            $table->integer ('duration');
            $table->integer ('sales_rep_id');
            $table->integer ('customer_id');
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
        Schema::dropIfExists('customer_loan');
    }
}
