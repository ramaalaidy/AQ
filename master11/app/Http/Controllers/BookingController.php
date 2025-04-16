<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $services = Booking::all();
        return view('booking', compact('services'));
    }

    public function store(Request $request) {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'يجب تسجيل الدخول أولاً');
        }

        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'people' => 'required|integer|min:1|max:20',
            'location' => 'required|string|max:255'
        ]);

        $service = Service::find($request->service_id);

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'date' => $request->date,
            'time' => $request->time,
            'people' => $request->people,
            'location' => $request->location,
            'price' => $service->price * $request->people
        ]);

        return redirect()->route('bookings.confirm', $booking);
    }

    public function confirm(Booking $booking) {
        return view('confirm-booking', compact('booking'));
    }

    public function myBookings() {
        $bookings = auth()->user()->bookings()->with('service')->get();
        return view('my-bookings', compact('bookings'));
    }
}
