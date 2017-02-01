<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Analysis_request.
 *
 * @author  The scaffold-interface created at 2017-02-01 06:06:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Analysis_request extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'analysis_requests';

	
}
