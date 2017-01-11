<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Analysi.
 *
 * @author  The scaffold-interface created at 2017-01-11 05:55:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Analysi extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'analyses';

	
}
