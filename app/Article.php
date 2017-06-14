<?php

namespace App;

use App\ArticleCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function scopeFromDate($query, $date)
    {
        return $query->with(['multimedia' => function ($query) {
                                $query->where('type', 'image');
                            }])
                        ->whereDate('pub_date', $date)
                        ->whereRaw('LENGTH(`headline`) < 120')
                        ->where('headline', 'NOT LIKE', '%;%')
                        ->where('headline', 'NOT LIKE', '%-- no title%')
                        ->where('published', 1)
                        ->where(function ($query) {
                            $query->whereNotNull('lead_paragraph')->whereRaw('LENGTH(`lead_paragraph`) > 26')
                                    ->orWhereNotNull('snippet')->whereRaw('LENGTH(`snippet`) > 26')
                                    ->orWhereNotNull('abstract')->whereRaw('LENGTH(`abstract`) > 26');
                        })
                        ->orderBy('print_page');
    }

    /**
     * Check if exist at least one record for given date
     * 
     * @param  \Carbon\Carbon $date
     * @return bool
     */
    public static function exists($date)
    {
        $article = DB::table('articles')->select('id')->whereDate('pub_date', $date)->limit(1)->first();
        return $article != null;
    }
}
