<?php

namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class SmallRecordsTablesUpdate13 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function ($table) {
            $table->text('price')->nullable();
            $table->text('deadline')->nullable();
        });
    }

    public function down()
    {

        Schema::table('janvince_smallrecords_records', function ($table) {
            $table->dropColumn('price');
            $table->dropColumn('deadline');
        });
    }
}
