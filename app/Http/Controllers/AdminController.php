<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Room;

use App\Models\food;

use App\Models\email;

use App\Models\Reservation;

use App\Models\feedback;

class AdminController extends Controller
{
    public function index()
    {
        $users =user::all();

        return view('Admin.home',compact('users'));
    }

    public function addroom()
    {
        return view('admin.add_room');
    }

    public function addfood()
    {
        return view('admin.add_food');
    }

    public function uploadroom(Request $request)
    {
        $room = new room;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('roomimage',$imagename);
        $room->image=$imagename;
        
        $room->room_name=$request->name;
        $room->price=$request->price;
        $room->detail=$request->detail;

        $room->save();

        return redirect()->back()->with('message','Room Added Successfully');

    }

    public function uploadfood(Request $request)
    {
        $food = new food;

        $fimage=$request->file;
        $imagename=time().'.'.$fimage->getClientOriginalExtension();

        $request->file->move('roomimage',$imagename);
        $food->fimage=$imagename;
        
        $food->food_name=$request->fname;
        $food->fprice=$request->fprice;
    

        $food->save();

        return redirect()->back()->with('message','Food Added Successfully');

    }

    public function roomlist()
    {
        $data = room::all();
        return view('admin.room_list',compact('data'));
    }

    public function foodlist()
    {
        $data = food::all();
        return view('admin.food_list',compact('data'));
    }

    public function showreservation()
    {
        $data=reservation::all();
        return view('admin.showreservation',compact('data'));
    }

    public function cancel_reserve($id)
    {
        $data=reservation::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_room($id)
    {
        $data= room::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_room($id)
    {
        $data= room::find($id);
        return view('admin.update_room',compact('data'));
    }

    public function delete_food($id)
    {
        $data= food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_food($id)
    {
        $data= food::find($id);
        return view('admin.update_food',compact('data'));
    }

    public function edit_room(Request $request,$id)
    {
        $room= room::find($id);
        $room->room_name=$request->name;
        $room->price=$request->price;
        $room->detail=$request->detail;

        $image=$request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('roomimage',$imagename);
            $room->image=$imagename;
        }

        $room->save();

        return redirect()->back()->with('message','Room details updated successfully');
    }

    public function edit_food(Request $request,$id)
    {
        $food= food::find($id);
        $food->food_name=$request->fname;
        $food->fprice=$request->fprice;
        

        $fimage=$request->file;
        if($fimage)
        {
            $imagename=time().'.'.$fimage->getClientOriginalExtension();
            $request->file->move('roomimage',$imagename);
            $food->fimage=$imagename;
        }

        $food->save();

        return redirect()->back()->with('message','Food details updated successfully');
    }

    public function email()
    {
        $data=email::all();
        return view('admin.email',compact('data'));
    }

    public function fedback()
    {
        $data=feedback::all();
        return view('admin.feedback',compact('data'));
    }

    public function delete_user($id)
    {
        $users= user::find($id);
        $users->delete();
        return redirect()->back();
    }
}
