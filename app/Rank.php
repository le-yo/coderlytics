<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rank.
 *
 * @author  The scaffold-interface created at 2017-02-01 11:08:05pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Rank extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'ranks';

	
}
