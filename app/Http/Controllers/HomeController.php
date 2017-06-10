<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
    	$date = Carbon::today()->subYears(152);

    	$articles = Article::whereDate('pub_date', $date)
    						->whereRaw('LENGTH(`headline`) < 120')
    						->where('headline', 'NOT LIKE', '%;%')
    						->where('published', 1)
    						->where(function ($query) {
    							$query->whereNotNull('lead_paragraph')
    									->orWhereNotNull('snippet')
    									->orWhereNotNull('abstract');
    						})
    						->orderBy('print_page')
    						->get();
    	$columns = $articles->columnize(4);
    	$mainArticle = $columns[0]->shift();
    	return view('home', compact('date', 'columns', 'mainArticle'));
    }
}
