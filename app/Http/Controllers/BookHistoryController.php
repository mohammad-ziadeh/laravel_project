<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookHistoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $BookingHistories = Booking::where('user_id', $user->id)->paginate(10);
        
        return view('profile.booking-history', compact('BookingHistories'));
    }
}
