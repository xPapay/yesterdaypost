<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArticleCollection;

class Article extends Model
{
	/**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new ArticleCollection($models);
    }

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
