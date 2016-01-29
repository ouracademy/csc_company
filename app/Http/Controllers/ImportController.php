<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImportController extends Controller
{
    public function index()
    {
        return view('import');
    }
     public function catalog()
    {
        return view('catalog');
    }
}
