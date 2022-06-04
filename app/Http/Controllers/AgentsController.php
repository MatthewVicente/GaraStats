<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class AgentsController extends BaseController
{
    public function index() {
        $response =  Http::get('https://valorant-api.com/v1/agents', ['language' => 'pt-BR']);

        if ($response) {
            $agents = json_decode($response->getBody(), true)["data"];

            $agentsFiltered = array_filter($agents, function ($item) {
                return $item["isPlayableCharacter"] === true;
            });
        }

        return view('agents', ['agents' => $agentsFiltered]);
    }
}
