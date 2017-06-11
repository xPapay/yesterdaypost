<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show today's articles
     * 
     * @return \Illuminate\Http\Response
     */
    public function today()
    {
    	$date = Carbon::today()->subYears(84);
        $canonicalLink = $date->format('Y/m/d');
    	$articles = Article::fromDate($date)->get();
    	$columns = $articles->columnize(4);
    	$mainArticle = $columns[0]->shift();
    	return view('home', compact('date', 'columns', 'mainArticle', 'canonicalLink'));
    }

    /**
     * Show articles for specific date
     * 
     * @param  string $year 
     * @param  string $month
     * @param  string $day
     * @return \Illuminate\Http\Response
     */
    public function date($year, $month, $day)
    {
        $date = Carbon::createFromDate($year, $month, $day)->setTime(0,0,0);
        $this->restrictFutureArticles($date);
        $articles = Article::fromDate($date)->get();
        $columns = $articles->columnize(4);
        $mainArticle = $columns[0]->shift();
        return view('home', compact('date', 'columns', 'mainArticle'));
    }

    /**
     * Restrict access to articles published later than today
     * 
     * @param  Carbon $demandedDate The day which user trying to access
     * @return \Illuminate\Http\Exceptions\HttpResponseException
     */
    private function restrictFutureArticles(Carbon $demandedDate)
    {
        $today = Carbon::today()->subYears(84);
        if ($today->lt($demandedDate))
        {
            abort(404);
        }
    }
}
