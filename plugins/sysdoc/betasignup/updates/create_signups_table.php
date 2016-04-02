<?php namespace Sysdoc\BetaSignup\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSignupsTable extends Migration
{

    public function up()
    {
        Schema::create('sysdoc_betasignup_signups', function($table)
        {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('Name', 255)->nullable();
          $table->string('Email', 255)->nullable();
          $table->string('CompanySize', 255)->nullable();
          $table->string('Status', 255)->nullable();
          $table->text('note')->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sysdoc_betasignup_signups');
    }

}
