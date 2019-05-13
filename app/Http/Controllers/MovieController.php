<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class MovieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    
    public function findOne(Request $request, $id){

        $client = new Client();
        

        $res = $client->request('GET', 'https://api.themoviedb.org/3/movie/'.$id.'?api_key='.API.'&language=en-US');
    
        $body = $res->getBody();

        return response()->json(json_decode($body));
    }

    public function findAll(Request $request, $page){

        $client = new Client();

        $res = $client->request('GET', 'https://api.themoviedb.org/3/movie/upcoming?api_key='.API.'&language=en-US&page='.$page);
        
        $body = $res->getBody();

        return response()->json(json_decode($body));
    }

}
