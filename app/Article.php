<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function multimedia()
    {
    	return $this->hasMany(Multimedia::class);
    }
}
