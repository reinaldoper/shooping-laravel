<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\apiController;
use Illuminate\Http\JsonResponse;

class webController extends Controller
{
    public function indexAction()
    {
        $response = new apiController(); 
        $data = $response->getAll();

        return view('welcome', ['data' => $data]);
    }
    public function show($id)
    {
        $response = new apiController(); 
        $data = $response->getById($id);
        return view('product', ['produto' => $data]);
    }

}
