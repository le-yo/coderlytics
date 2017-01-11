<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Coderlytic.
 *
 * @author  The scaffold-interface created at 2017-01-11 04:31:24pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Coderlytic extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'coderlytics';

	
}
