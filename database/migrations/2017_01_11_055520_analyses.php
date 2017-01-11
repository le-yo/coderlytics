<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Analyses.
 *
 * @author  The scaffold-interface created at 2017-01-11 05:55:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Analyses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('analyses',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('first_name');
        
        $table->String('second_name');
        
        $table->String('email_add');
        
        $table->String('github_url');
        
        $table->String('repo_reviewed');
        
        $table->String('code_comment');
        
        $table->String('readme__file');
        
        $table->String('no_of_commits');
        
        $table->String('no_of_contributors');
        
        $table->String('code_modularization');
        
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
        Schema::drop('analyses');
    }
}
