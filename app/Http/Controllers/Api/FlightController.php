<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
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
        $array123 = array(
            array (
            'id' => 1,
            'cia' => "GOL",
            'fare' => "1AF",
            'flightNumber' => "G3-1701",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "07:40",
            'arrivalTime' => "09:00",
            'classService' => 3,
            'price' => 50,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 2,
            'cia' => "AZUL",
            'fare' => "1AF",
            'flightNumber' => "AD-1111",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "07:40",
            'arrivalTime' => "09:00",
            'classService' => 3,
            'price' => 50,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 3,
            'cia' => "LATAM",
            'fare' => "1AF",
            'flightNumber' => "LA-2222",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "07:40",
            'arrivalTime' => "09:00",
            'classService' => 3,
            'price' => 50,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 4,
            'cia' => "GOL",
            'fare' => "1AF",
            'flightNumber' => "G3-3333",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "08:40",
            'arrivalTime' => "10:00",
            'classService' => 3,
            'price' => 100,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 5,
            'cia' => "AZUL",
            'fare' => "1AF",
            'flightNumber' => "AD-4444",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "08:40",
            'arrivalTime' => "10:00",
            'classService' => 3,
            'price' => 100,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 6,
            'cia' => "LATAM",
            'fare' => "1AF",
            'flightNumber' => "LA-5555",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "08:40",
            'arrivalTime' => "10:00",
            'classService' => 3,
            'price' => 100,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 7,
            'cia' => "GOL",
            'fare' => "1AF",
            'flightNumber' => "G3-6616",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "12:40",
            'arrivalTime' => "14:00",
            'classService' => 3,
            'price' => 120,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 8,
            'cia' => "GOL",
            'fare' => "1AF",
            'flightNumber' => "G3-7777",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "18:40",
            'arrivalTime' => "20:00",
            'classService' => 3,
            'price' => 150,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            ),
            array (
            'id' => 9,
            'cia' => "LATAM",
            'fare' => "1AF",
            'flightNumber' => "LA-5555",
            'origin' => "BSB",
            'destination' => "CNF",
            'departureDate' => "30/01/2021",
            'arrivalDate' => "30/01/2021",
            'departureTime' => "08:40",
            'arrivalTime' => "10:00",
            'classService' => 3,
            'price' => 150,
            'tax' => 36,
            'outbound' => 0,
            'inbound' => 1,
            'duration' => "1:20"
            ),
            array (
            'id' => 10,
            'cia' => "AZUL",
            'fare' => "1AF",
            'flightNumber' => "AD-6606",
            'origin' => "BSB",
            'destination' => "CNF",
            'departureDate' => "30/01/2021",
            'arrivalDate' => "30/01/2021",
            'departureTime' => "08:40",
            'arrivalTime' => "10:00",
            'classService' => 3,
            'price' => 150,
            'tax' => 36,
            'outbound' => 0,
            'inbound' => 1,
            'duration' => "1:20"
            ),
            array (
            'id' => 11,
            'cia' => "GOL",
            'fare' => "1AF",
            'flightNumber' => "G3-8888",
            'origin' => "BSB",
            'destination' => "CNF",
            'departureDate' => "30/01/2021",
            'arrivalDate' => "30/01/2021",
            'departureTime' => "08:40",
            'arrivalTime' => "10:00",
            'classService' => 3,
            'price' => 200,
            'tax' => 36,
            'outbound' => 0,
            'inbound' => 1,
            'duration' => "1:20"
            ),
            array (
            'id' => 12,
            'cia' => "GOL",
            'fare' => "4DA",
            'flightNumber' => "G3-9999",
            'origin' => "BSB",
            'destination' => "CNF",
            'departureDate' => "30/01/2021",
            'arrivalDate' => "30/01/2021",
            'departureTime' => "20:40",
            'arrivalTime' => "22:00",
            'classService' => 3,
            'price' => 1000,
            'tax' => 36,
            'outbound' => 0,
            'inbound' => 1,
            'duration' => "1:20"
            ),
            array (
            'id' => 13,
            'cia' => "LATAM",
            'fare' => "4DA",
            'flightNumber' => "LA-9897",
            'origin' => "BSB",
            'destination' => "CNF",
            'departureDate' => "30/01/2021",
            'arrivalDate' => "30/01/2021",
            'departureTime' => "20:40",
            'arrivalTime' => "22:00",
            'classService' => 3,
            'price' => 1000,
            'tax' => 36,
            'outbound' => 0,
            'inbound' => 1,
            'duration' => "1:20"
            ),
            array (
            'id' => 14,
            'cia' => "GOL",
            'fare' => "4DA",
            'flightNumber' => "G3-9897",
            'origin' => "BSB",
            'destination' => "CNF",
            'departureDate' => "30/01/2021",
            'arrivalDate' => "30/01/2021",
            'departureTime' => "20:40",
            'arrivalTime' => "22:00",
            'classService' => 3,
            'price' => 1200,
            'tax' => 36,
            'outbound' => 0,
            'inbound' => 1,
            'duration' => "1:20"
            ),
            array (
            'id' => 15,
            'cia' => "AZUL",
            'fare' => "4DA",
            'flightNumber' => "AD-1234",
            'origin' => "CNF",
            'destination' => "BSB",
            'departureDate' => "29/01/2021",
            'arrivalDate' => "29/01/2021",
            'departureTime' => "20:40",
            'arrivalTime' => "22:00",
            'classService' => 3,
            'price' => 500,
            'tax' => 36,
            'outbound' => 1,
            'inbound' => 0,
            'duration' => "1:20"
            )
            );

        //Dados de API externa 123_Milhas
        //$theUrl    = config('app.guzzle_url').'/api/flights/';
        //$flights   = (Http::get($theUrl))->json();
        $flights = $array123;
        array_multisort(array_column($flights, 'price'), SORT_ASC, $flights);

        //Pega vôos disponíveis para retorno em json
        $allFlights = array_column($flights, 'flightNumber');
        $flightsStr = implode(", ", $allFlights);

        //Separa os vôos de ida e de volta
        $inbound = [];
        $outbound = [];
        for ($i=0; $i <count($flights) ; $i++) {
            if($flights[$i]['outbound'] == 1){
                $outbound[] = $flights[$i];
            }
            else{
                $inbound []= $flights[$i];
            }
        }

        //Pega as diferentes tarifas
        $faresOutbound = array_unique((array_column($outbound, 'fare')));
        $faresOutbound = array_values($faresOutbound);
        $faresInbound = array_unique((array_column($inbound, 'fare')));
        $faresInbound = array_values($faresInbound);

        //Pega os diferentes preços
        $pricesOutbound = array_unique((array_column($outbound, 'price')));
        $pricesOutbound = array_values($pricesOutbound);
        $pricesInbound = array_unique((array_column($inbound, 'price')));
        $pricesInbound = array_values($pricesInbound);

        $objectOutbound = collect($outbound);
        $objectInbound = collect($inbound);

        $countFaresOutbound = $objectOutbound->groupBy(['fare'])->count();
        $countPriceOutbound = $objectOutbound->groupBy(['price'])->count();

        $selext1 = $objectOutbound->where('fare', '1AF');
        //dd($selext1, $faresOutbound[0]);

        $grupo = [];
        for ($i=0; $i < count($faresOutbound); $i++) {
            $grupo [] = $objectOutbound->where('fare', $faresOutbound[$i]);
        }
        dd(count($grupo));

        $groups = $objectOutbound->groupBy(['fare','price']);


        dd($objectOutbound->groupBy(['fare','price']));

        $groupPrice1 = $objectOutbound->where('fare', "4DA");

        $countFaresInbound = $objectInbound->groupBy(['fare'])->count();
        $countPricesInbound = $objectInbound->groupBy(['price'])->count();

        dd($groupPrice1, $countFaresOutbound, $countPriceOutbound, $countFaresInbound, $countPricesInbound);

        $objectOutbound->groupBy(['price']);
        $objectOutbound->groupBy(['price']);

        $objectInbound->groupBy(['fare'],['price']);
        $objectOutbound = $objectOutbound->groupBy(['fare'])->get('1AF');

        dd($objectOutbound);

        //Junta os vôos de ida por preço
        $outboundPriceGroup [] = [];
        foreach ($outbound as $key => $value) {
            $outboundPriceGroup[$outbound[array_search($value['price'], $outbound)]] [] = $value;
        }
        dd(count($outboundPriceGroup), $outboundPriceGroup);


        dd($pricesOutbound, $pricesInbound);


        return response()->json(['flights'=> $flightsStr]);

    }
}
