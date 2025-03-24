<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Ourtripcrud; 

class HomePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourtripcruds = Ourtripcrud::paginate(10);
        
        return view('home.aboutUs', compact('ourtripcruds'));
    }

}
