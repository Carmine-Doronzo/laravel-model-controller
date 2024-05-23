<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        $image = [
            'https://image.tmdb.org/t/p/w342//hMTncCsOwZZCNOo5SBhE1wQKpid.jpg',
            'https://image.tmdb.org/t/p/w342//4CNBWPe7tngmrGLd8wtKoIMfnLS.jpg',
            'https://image.tmdb.org/t/p/w342//tdqX0MWaFHuGwUygYn7j6eluOdP.jpg',
            'https://image.tmdb.org/t/p/w342//4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg',
            'https://image.tmdb.org/t/p/w342//mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg',
            'https://image.tmdb.org/t/p/w342//9p10J9Xp7MuaVac56g8BwAuXEsA.jpg',
            'https://image.tmdb.org/t/p/w342//pGZqc9jQ6F8klQZKm37NAAMH70o.jpg',
            'https://image.tmdb.org/t/p/w342//uteN8YA4Yddm4mDVPH7QwvOZia1.jpg',
            'https://image.tmdb.org/t/p/w342//3DIwTC2A58WDtsgjaXjo2FYA1pW.jpg',
            'https://image.tmdb.org/t/p/w342//8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg'    
        ];
        
        return view('home',compact('movies'),compact('image'));
    }
}
