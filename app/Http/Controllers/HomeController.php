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
        $cacheExpiry = $this->getCacheExpiryDate();
        $date = Carbon::today()->subYears(84);
        $canonicalLink = $date->format('Y/m/d');
    	$articles = Article::fromDate($date)->get();
    	$columns = $articles->columnize(4);
    	$mainArticle = $columns[0]->shift();
        $yesterdayUrl = $this->getYesterdayURL($date);
        $tomorrowUrl = $this->getTomorrowURL($date);
    	return response()
                ->view('home', compact('date', 'columns', 'mainArticle', 'canonicalLink', 'yesterdayUrl', 'tomorrowUrl'))
                ->header('Expires', $cacheExpiry);
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
        $yesterdayUrl = $this->getYesterdayURL($date);
        $tomorrowUrl = $this->getTomorrowURL($date);
        return view('home', compact('date', 'columns', 'mainArticle', 'yesterdayUrl', 'tomorrowUrl'));
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

    private function getCacheExpiryDate()
    {
        return Carbon::tomorrow()->format('D, d M Y H:i:s e');
    }

    private function getTomorrowURL(Carbon $currentDate)
    {
        $currentDate = clone $currentDate;
        $today = Carbon::today()->subYears(84);
        if ($currentDate->gte($today))
        {
            return false;
        }

        $tomorrow = $currentDate->addDay();

        return route('date', [
            'year' => $tomorrow->year, 
            'month' => $tomorrow->format('m'),
            'day' => $tomorrow->format('d')
        ]);
    }

    private function getYesterdayURL(Carbon $currentDate)
    {
        $currentDate = clone $currentDate;
        $yesterday = $currentDate->subDay();
        if (! Article::exists($yesterday))
        {
            return false;
        }

        return route('date', [
            'year' => $yesterday->year,
            'month' => $yesterday->format('m'),
            'day' => $yesterday->format('d')
        ]);
    }
}
