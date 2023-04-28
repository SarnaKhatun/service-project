<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function createService()
    {
        return view('dashboard');
    }

    public function storeService(Request $request)
    {
        return $request->all();
    }
}
