<?php namespace Magiczne\Resume\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

class CreateMagiczneResumeInfoTable extends Migration
{
    public function up()
    {
        Schema::create('magiczne_resume_info', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('icon');
            $table->string('title');
            $table->string('value');
            $table->boolean('mail');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('magiczne_resume_info');
    }
}
