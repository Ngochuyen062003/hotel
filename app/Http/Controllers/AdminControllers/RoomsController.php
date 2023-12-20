<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    private $rooms;
    public function __construct(Room $rooms)
    {
        $this->rooms = $rooms;
    }

    // Hiển thị sản phẩm
    public function list()
    {
        $roomList = $this->rooms->getAllRoom();
        return view('admin.rooms.rooms_list', compact('roomList'));
    }
    public function add()
    {
        return view('admin.rooms.add_room');
    }
    public function postAddRoom(RoomRequest $request)
    {
        if($request->hasFile('main_image')){
            // lấy tên file
            $filename = time().'_'.$request->file('main_image')->getClientOriginalName();
            //dd($filename);
            $uploadFile = $request->file('main_image')->storeAs('imgRooms', $filename, 'public');
        }
        else{
            $uploadFile = null;
        }
        $dataInsert = [
            'name' => "$request->name",
            'main_image' => "$uploadFile",
            'expert' => "$request->expert",
            'description' => "$request->description",
            'price' => "$request->price",
        ];

        $this->rooms->addRoom($dataInsert);
        return redirect()->route('admin.list-rooms');
    }

    public function getRoomId($id)
    {
        $room = Room::find($id);
        return view('admin.rooms.update_room', compact('room'));
    }

    public function update($id, $dataUpdate)
    {
        $room = Room::find($id);
        $room->update($dataUpdate);
    }
    public function postUpdateRoom($id, RoomRequest $request)
    {
        $room = Room::find($id);
        $uploadFile = $room->main_image;
        if($request->hasFile('main_image')){
            // nếu có ảnh cũ thì xóa
            Storage::delete('/public/'.$room->main_image);
            // lấy tên file
            $filename = time().'_'.$request->file('main_image')->getClientOriginalName();

            $uploadFile = $request->file('main_image')->storeAs('imgRooms', $filename, 'public');
        }
        $dataUpdate = [
            'name' => "$request->name",
            'main_image' => "$uploadFile",
            'expert' => "$request->expert",
            'description' => "$request->description",
            'price' => "$request->price",
        ];

        $this->rooms->updateRoom($id, $dataUpdate);
        return redirect()->route('admin.list-rooms');
    }
    public function deleteRoom($id)
    {
        //dd($id);
        $room = Room::find($id);
        Storage::delete('/public/'.$room->main_image);
        $room->delete();
        return back();
    }
}
