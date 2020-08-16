<?php namespace Magiczne\Resume\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

class CreateMagiczneResumeExperienceTable extends Migration
{
    public function up()
    {
        Schema::create('magiczne_resume_experience', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('time_period');
            $table->text('content');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('magiczne_resume_experience');
    }
}
