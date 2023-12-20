<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking_room';

    protected $fillable = ['full_name','phone', 'email', 'is_customer', 'adults', 'children', 'check_in',
                           'check_out', 'type_room', 'quantity', 'total', 'status'];

    public $timestamps = false;

    public function addBooking($data)
    {
        return $this->create($data);
    }
    public function updateBooking($id, $dataUpdate)
    {
        $booking = Booking::find($id);
        $booking->update($dataUpdate);
    }
    public function getAllBooking(){
        $bookings = DB::select('SELECT * FROM booking_room');
        return $bookings;

    }
}
