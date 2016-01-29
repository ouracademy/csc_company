<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
     public function import()
	{
		return view('import');
	}
	
    public function export()
    {
        return view('import');
    }
    
    public function courses()
    {
        return view('courses');
    }
    
    public function home()
    {
        return view('import');
    }
}
