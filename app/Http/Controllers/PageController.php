<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    { 
        return view('features.beranda'); 
    }

    public function sintaks() 
    { 
        return view('features.sintaks'); 
    }

    public function panduan() 
    { 
        return view('features.panduan'); 
    }

    public function perangkat() 
    { 
        return view('features.perangkat'); 
    }
    
    public function evaluasi() 
    { 
        return view('features.evaluasi'); 
    }

}
