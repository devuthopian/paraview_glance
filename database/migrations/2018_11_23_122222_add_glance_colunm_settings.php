<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGlanceColunmSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('settings', function($table) {
         $table->string('glance_card_title', 191)->nullable();
         $table->string('glance_card_disc', 191)->nullable();
         $table->string('glance_open_file_text', 191)->nullable();
         $table->string('glance_open_file_disc', 191)->nullable();
         $table->string('glance_save_state_text', 191)->nullable();
         $table->string('glance_screenshot_text', 191)->nullable();
         $table->string('glance_sidebar_position', 191)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function($table) {
        $table->dropColumn('glance_card_title');
        $table->dropColumn('glance_card_disc');
        $table->dropColumn('glance_open_file_text');
        $table->dropColumn('glance_open_file_disc');
        $table->dropColumn('glance_save_state_text');
        $table->dropColumn('glance_screenshot_text');
        $table->dropColumn('glance_sidebar_position');
    });
    }
}
