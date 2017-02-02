<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserDetailsAndRepoDetailsToCoderlytics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coderlytics', function (Blueprint $table) {
            $table->text('repo_details');
            $table->text('user_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coderlytics', function (Blueprint $table) {
            $table->dropColumn('repo_details');
            $table->dropColumn('user_details');
        });
    }
}
