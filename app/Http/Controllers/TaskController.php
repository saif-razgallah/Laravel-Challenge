<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class TaskController extends Controller
{

    public function index(){

        $client = new Client(); 
        //call api
        $url = "http://127.0.0.1:8000/api/alltask";
        $response = $client->request('GET', $url, [
            'verify'  => false
        ]);

        $responseBody = json_decode($response->getBody());

       // dd($responseBody[]);
        return  view("tasks",[
            "tasks"=>$responseBody[0]
        ]);

    }
    
}
