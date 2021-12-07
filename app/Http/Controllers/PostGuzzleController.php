<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostGuzzleController extends Controller
{
    public function index()
    {
        $response = Http::get('https://io.adafruit.com/api/v2/JuanCastorena18/feeds/semiintegrador.ultrasonico/data');

        $jsonData = $response->json();

        dd($jsonData);
    }
    public function store()
    {
        $response = Http::post('http://jsonplaceholder.typicode.com/posts', [
        ]);

        dd($response->successful());
    }
}
