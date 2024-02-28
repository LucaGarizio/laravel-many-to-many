<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getTechnology(){
        return response()->json([
            'status' => 'success',
            'message' => 'ciao'
        ]);
    }
}
