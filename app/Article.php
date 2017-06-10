<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function multimedia()
    {
    	return $this->hasMany(Multimedia::class);
    }

    public function getPerexAttribute()
    {
    	if ($this->lead_paragraph)
    	{
    		return $this->lead_paragraph;
    	}
    	elseif ($this->snippet) 
    	{
    		return $this->snippet;
    	}
    	else
    	{
    		return $this->abstract;
    	}
    }
}
