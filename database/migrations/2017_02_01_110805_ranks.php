<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Ranks.
 *
 * @author  The scaffold-interface created at 2017-02-01 11:08:05pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Ranks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('ranks',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('first_name');
        
        $table->String('second_name');
        
        $table->String('email_address');
        
        $table->String('Organization');
        
        $table->String('dev_manager');
        
        $table->String('senior_dev');
        
        $table->String('scrum');
        
        $table->String('devops');
        
        $table->String('architect');
        
        $table->String('product_owner');
        
        $table->String('quality_lead');
        
        $table->String('tester');
        
        $table->String('junior_dev');
        
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
        Schema::drop('ranks');
    }
}
