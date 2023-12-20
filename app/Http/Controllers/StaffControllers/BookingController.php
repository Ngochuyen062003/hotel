<?php

namespace App\Http\Controllers\StaffControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Room;

class BookingController extends Controller
{
    private $bookings;
    public function __construct(Booking $bookings)
    {
        $this->bookings = $bookings;
    }
    public function index()
    {
        $rooms = Room::all();
        return view('staffs.booking', compact('rooms'));
    }
    public function postAddBooking(BookingRequest $request)
    {
        $room = Room::find($request->type_room);
        $totalRooms = $request->quantity;
        $totalDays = $request->result;
        $total = $room->price * $totalRooms * $totalDays;
        $dataInsert = [
            'full_name' => "$request->full_name",
            'phone' => "$request->phone",
            'email' => "$request->email",
            'is_customer' => "$request->is_customer",
            'check_in' => "$request->check_in",
            'check_out' => "$request->check_out",
            'adults' => "$request->adults",
            'children' => "$request->children",
            'type_room' => "$request->type_room",
            'quantity' => "$totalRooms",
            'total' => "$total",
            'status' => "1",
        ];

        $this->bookings->addBooking($dataInsert);
        return redirect()->route('booking-done');
    }
}
