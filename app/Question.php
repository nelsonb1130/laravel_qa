<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['title','body'];
	
	public function user()
	{
		return $this->belongsto(User:class);
	
	}	

	public function setTitleAttribute($value)
	{
		$this->attribues['title']= $value;
		$this->attribues['slug']= str_slug($value);
	}
}
