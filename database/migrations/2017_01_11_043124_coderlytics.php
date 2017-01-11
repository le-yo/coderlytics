<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Coderlytics.
 *
 * @author  The scaffold-interface created at 2017-01-11 04:31:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Coderlytics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('coderlytics',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('first_name');
        
        $table->String('second_name');
        
        $table->String('email_add');
        
        $table->String('github_url');
        
        $table->String('repo_reviewed');
        
        $table->integer('code_comment');
        
        $table->integer('readme__file');
        
        $table->integer('no_of_commits');
        
        $table->integer('no_of_contributors');
        
        $table->integer('code_modularization');
        
        /**
         * Foreignkeys section
         */
        
        
        //$table->timestamps();
        
        
        //$table->softDeletes();
        
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
        Schema::drop('coderlytics');
    }
}
