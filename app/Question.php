<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Question extends Model
{
	protected $fillable = ['title','body'];
	
	public function user()
	{
		return $this->belongsto(User::class);
	
	}	

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route('questions.show',$this->id);
    }

    public function getCreateddateAttribute()
    {
        // return $this->create_at->format('d-m-Y');
        return $this->created_at->diffForHumans();
    }
}
