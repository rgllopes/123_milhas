<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* @OA\Info(title="API Usuarios", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000")
*/
class UserController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/users",
    *     summary="Mostrar usuarios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function index()
    {
        $array = [
            "id"=> 1,
            "cia"=> "LATAM",
            "fare"=> "4DA",
    ];
        return $array;
        //return User::all();
    }
}
