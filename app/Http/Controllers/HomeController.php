<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function today()
    {
    	$date = Carbon::today()->subYears(84);
    	$articles = Article::fromDate($date)->get();
    	$columns = $articles->columnize(4);
    	$mainArticle = $columns[0]->shift();
    	return view('home', compact('date', 'columns', 'mainArticle'));
    }

    public function date($year, $month, $day)
    {
        $date = Carbon::createFromDate($year, $month, $day);
        $articles = Article::fromDate($date->toDateString())->get();
        $columns = $articles->columnize(4);
        $mainArticle = $columns[0]->shift();
        return view('home', compact('date', 'columns', 'mainArticle'));
    }
}
