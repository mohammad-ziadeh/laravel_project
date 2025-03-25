<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view("home.contactus", compact("contacts"));
    }
}
