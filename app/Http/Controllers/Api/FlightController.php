<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

/**
* @OA\Info(title="API 123 Milhas", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000")
*/
class FlightController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/flights",
    *     summary="Mostrar vôos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos os vôos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ocorreu um erro."
    *     )
    * )
    */
    public function index()
    {
        //External API consumption 123_Milhas
        $theUrl     = config('app.guzzle_url').'/api/flights/';
        $flights   = Http ::get($theUrl);

        return $flights;
    }
}
