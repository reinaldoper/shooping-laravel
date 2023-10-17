<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;

class apiController extends Controller
{
    public function getAll()
    {
        $result = $this->getApi();
        return $result;
    }

    protected function getApi(): JsonResponse
    {
        
        $client = new Client();
        $response = $client->get('https://dummyjson.com/products');

        
        if ($response->getStatusCode() == 200) {
            $data = $response->getBody()->getContents();
            $dataArray = json_decode($data, true);
            return response()->json($dataArray, 200);
        } else {
            return response()->json(['error' => 'Falha na solicitação'], 500);
        }
        
    }

    public function getById($id)
    {
        if(is_numeric($id))
        {
            $result = $this->getApiById($id);
            return $result;
        }else{
            return response()->json(['error' => 'Id inválido'], 500);
        }
    }

    protected function getApiById(int $id)
    {
        try {
            $client = new Client();
            $response = $client->get("https://dummyjson.com/products/$id");

            
            if ($response->getStatusCode() == 200) {
                $data = $response->getBody()->getContents();
                $dataArray = json_decode($data, true);
                return response()->json($dataArray, 200);
            } else {
                return response()->json(['error' => 'Falha na solicitação'], 500);
            }
        } catch (Exception $th) {
            return response()->json(['error' => 'Falha na solicitação'], 500);
        }
    }
}
