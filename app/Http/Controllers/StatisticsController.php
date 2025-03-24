<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Ourtripcrud;
use App\Models\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon; 

class StatisticsController extends Controller
{
    public function index()
    {
        // User Statistics
        $totalAllUser = User::count();
        $totalUser = User::where('role', 'user')->count();
        $totalAdmin = User::where('role', 'admin')->count();

        // Other Models Statistics
        $totalBookings = Booking::count();
        $totalContact = Contact::count();
        $totalOurtripcrud = Ourtripcrud::count();
        $totalEarning = Booking::sum('price');

        // Date-based Statistics
        $todayDate = Carbon::now()->toDateString();
        $thisMonth = Carbon::now()->month;
        $thisYear = Carbon::now()->year;

        // Reservation Statistics
        $totalReservation = Booking::count();
        $todayBooking = Booking::whereDate('created_at', $todayDate)->count();
        $thisMonthBooking = Booking::whereMonth('created_at', $thisMonth)->count();
        $thisYearBooking = Booking::whereYear('created_at', $thisYear)->count();

        return view('admin.layout.mainBody', [
            'totalUser' => $totalUser,
            'totalAllUser' => $totalAllUser,
            'totalAdmin' => $totalAdmin,
            'totalBookings' => $totalBookings,  
            'totalContact' => $totalContact,
            'totalOurtripcrud' => $totalOurtripcrud,
            'totalReservation' => $totalReservation,
            'todayReservation' => $todayBooking,   
            'thisMonthReservation' => $thisMonthBooking,  
            'thisYearReservation' => $thisYearBooking  ,
            'totalEarning' => $totalEarning
        ]);
    }
}
