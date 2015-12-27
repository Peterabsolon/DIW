<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public function images()
	{
		return $this->hasMany('App\Models\ProjectImage');
	}

	public function logos()
	{
		return $this->hasMany('App\Models\ProjectLogo');	
	}
}
