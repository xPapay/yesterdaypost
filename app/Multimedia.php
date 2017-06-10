<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $table = 'multimedia';

    public function article()
    {
    	return $this->belongsTo(Article::class);
    }
}
