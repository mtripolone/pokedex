<?php

namespace App\Http\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;

class PokedexService
{
    public static function allPokemons()
    {
        return self::sendRequest('GET', 'pokemon');
    }

    public static function getByNameorId($pokemon)
    {
        return self::sendRequest('GET', 'pokemon/' . $pokemon);
    }

    public static function sendRequest($method, $path)
    {
        $baseUri = config('services.pokedex.baseUri');

        $client = new Client(['base_uri' => $baseUri . "/"]);
        $headers = [
            'Accept'     => 'application/json',
        ];

        try {
            $resp =  $client->request($method, $path, [
                'headers' => $headers
                ]);
                return json_decode($resp->getBody()->getContents(), true);
        } catch (ServerException $e) {
                return [
                    'statusCode' => $e->getCode(),
                    'message' => $e->getMessage()
                ];
        } catch (GuzzleException $e) {
                return $e;
        }
    }
}
