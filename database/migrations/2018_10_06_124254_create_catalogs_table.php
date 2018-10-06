<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('acronym')->nullable();
            $table->text('description')->nullable();
            $table->text('url')->nullable();
            $table->string('type')->nullable();
            $table->text('languagesupported')->nullable();
            $table->string('periodicity')->nullable();
            $table->text('economycoverage')->nullable();
            $table->string('granularity');
            $table->string('numberofeconomies')->nullable();
            $table->string('updatefrequency')->nullable();
            $table->string('updateschedule')->nullable();
            $table->string('lastrevisiondate')->nullable();
            $table->text('contactdetails')->nullable();
            $table->string('accessoption')->nullable();
            $table->text('bulkdownload')->nullable();
            $table->text('cite')->nullable();
            $table->text('detailpageurl')->nullable();
            $table->string('popularity')->nullable();
            $table->text('coverage')->nullable();
            $table->string('api')->nullable();
            $table->text('apiaccessurl')->nullable();
            $table->string('apisourceid')->nullable();
            $table->text('mobileapp')->nullable();
            $table->text('topics')->nullable();
            $table->text('datanotes')->nullable();
            $table->text('listofcountriesregionssubnationaladmins')->nullable();
            $table->text('sourceurl')->nullable();
            $table->text('apilocation')->nullable();

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
        Schema::drop('catalogs');
    }
}
