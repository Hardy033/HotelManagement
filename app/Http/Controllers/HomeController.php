<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Room;

use App\Models\Reservation;

use App\Models\Email;

use App\Models\Food;

use App\Models\card;

use App\Models\feedback;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $room=room::all();
                
                return view('user.home',compact('room'));
            }
            else
            {
                $users =user::all();
                return view('admin.home',compact('users'));
            }

        }

        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        
        else
        {
            $room=room::all();

            return view('user.home',compact('room'));
        }
    }
    
    public function rooms()
    {
        $room=room::all();
        return view('user.rooms',compact('room'));
    }

    public function restaurant()
    {
        $data=food::all();
        return view('user.restaurant',compact('data'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function reserve()
    {
        $room=room::all();
        
        return view('user.reservation',compact('room'));
    }

    public function reservation(Request $request)
    {

        if(Auth::id())
        {
            $data = new reservation;

            $data->fname=$request->fname;
            $data->lname=$request->lname;
            $data->email=$request->email;
            $data->phone_no=$request->number;
            $data->check_in=$request->check_in;
            $data->check_out=$request->check_out;
            $data->room=$request->room;
            $data->adult=$request->adult;
            $data->child=$request->child;
            $data->number_of_room=$request->numroom;
            $data->extra=$request->extra;
            $data->status='pending';
            $data->price='4000';
            if(Auth::id())
            {
                $data->user_id=Auth::user()->id;
            }

            $data->save();

            return redirect()->back()->with('message','Reservation request successful');
        }
        else
        {
            return redirect()->back()->with('message','Please Log-in');

        }

    }

    public function myreservation()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $reser=reservation::where('user_id',$userid)->get();
            return view('user.myreservation',compact('reser'));
        }
        else
        {
            return redirect()->back();
            
        }
        
        
    }

    public function cancel_reser($id)
    {
        $data=reservation::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function mail(Request $request)
    {
        if(Auth::id())
        {
            $data = new email;
            $data->yname=$request->yname;
            $data->yemail=$request->yemail;
            $data->subject=$request->subject;
            $data->message=$request->message;
            if(AUth::id())
            {
                $data->user_id=Auth::user()->id;
            }

            $data->save();

            return redirect()->back()->with('message','successfully send message');
        }
        else
        {
            return redirect()->back()->with('message','Please Log-in');

        }

    }

    public function payment($id)
    {
        $data=reservation::find($id);
        $data->status='comfirm';
        $data->save();
        return view('user.payment',compact('data'));
    }

    public function paid(Request $request)
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $data = new card;
            $data->nameofcard=$request->nameofcard;
            $data->cardnumber=$request->cardnumber;
            $data->cardexpiry=$request->cardexpiry;
            $data->cvv=$request->cvv;
            $data->save();

            $reser=reservation::where('user_id',$userid)->get();
            return view('user.myreservation',compact('reser'))->with('message','comfirm reservation');
        }
        else
        {
            return redirect()->back();
            
        }
        
    }

    public function feedback()
    {
        return view('user.feedback');
    }

    public function feed(Request $request)
    {

        if(Auth::id())
        {
            $data = new feedback;

            $data->fname=$request->fname;
            $data->lname=$request->lname;
            $data->email=$request->email;
            $data->message=$request->message;
            $data->star=$request->star;
            if(Auth::id())
            {
                $data->user_id=Auth::user()->id;
            }

            $data->save();

            return redirect()->back()->with('message','feedback submited');
        }
        else
        {
            return redirect()->back()->with('message','Please Log-in');

        }

    }

}
