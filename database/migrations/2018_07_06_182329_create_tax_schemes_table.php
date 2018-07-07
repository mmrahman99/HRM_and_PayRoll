<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_schemes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description', 4000);
            $table->float('total_rate');
            $table->float('employee_rate');
            $table->float('company_rate');
            $table->string('acc_number');
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
        Schema::dropIfExists('tax_schemes');
    }
}
