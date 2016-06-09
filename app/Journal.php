<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
	protected $fillable = [
		'name'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
