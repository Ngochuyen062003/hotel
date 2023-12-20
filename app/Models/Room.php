<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = ['name','main_image', 'expert', 'description', 'price'];

    public $timestamps = false;

    public function addRoom($data)
    {
        return $this->create($data);
    }
    public function updateRoom($id, $dataUpdate)
    {
        $room = Room::find($id);
        $room->update($dataUpdate);
    }
    public function getAllRoom(){
        $rooms = DB::select('SELECT * FROM rooms');
        return $rooms;

    }
}
