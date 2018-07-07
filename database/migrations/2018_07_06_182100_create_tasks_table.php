<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description', 4000);
            $table->unsignedInteger('assigned_by');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedInteger('project');
            $table->string('privacy');
            $table->string('status');
            $table->integer('progress');
            $table->timestamps();

            $table->foreign('project')->references('id')->on('projects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('assigned_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
