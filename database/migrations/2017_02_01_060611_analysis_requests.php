<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Analysis_requests.
 *
 * @author  The scaffold-interface created at 2017-02-01 06:06:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AnalysisRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('analysis_requests',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('user_id');
        
        $table->String('primary_email');
        
        $table->String('code_repo');
        
        $table->String('job_type');
        
        $table->longText('other_details');
        
        $table->integer('status');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('analysis_requests');
    }
}
