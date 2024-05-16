<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\InfluentialWomen;
use App\Models\News;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['events'] = Event::orderBy('created_at', 'asc')->get();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(4)->get();
        $response['influentialWomens'] = InfluentialWomen::orderBy('name', 'asc')->limit(3)->get();
        return view('site.home.index', $response);
    }
}
