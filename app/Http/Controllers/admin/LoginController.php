<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Room;
use App\Notifications\MyFirstNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                if (Auth::guard('admin')->user()->role != 'admin') {
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('success', 'You are authorize to access this page.');

                }
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('admin.login')->with('error', 'Either email or password is incorrect.');
            }

        } else {
            return redirect()->route('admin.login')->withInput()->withErrors($validator);
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('account.index');
    }
    public function create_room()
    {
        return view('admin.create_room');
    }
    public function add_room(Request $request)
    {
        $data = new Room();
        $data->room_title = $request->room_title;
        $data->description = $request->room_description;
        $data->price = $request->room_price;
        $data->wifi = $request->room_wifi;
        $data->room_type = $request->room_type;
        $image = $request->room_image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->room_image->move('room', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
    public function view_room()
    {
        $rooms = Room::all();
        return view('admin.view_room', compact('rooms'));
    }
    public function delete_room($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->back();
    }
    public function edit_room($id)
    {
        $room = Room::find($id);
        return view('admin.edit_room', compact('room'));
    }
    public function update_room(Request $request, $id)
    {
        $room = Room::find($id);
        $room->room_title = $request->room_title;
        $room->description = $request->room_description;
        $room->price = $request->room_price;
        $room->wifi = $request->room_wifi;
        $room->room_type = $request->room_type;
        $image = $request->room_image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->room_image->move('room', $imagename);
            $room->image = $imagename;
        }
        $room->save();
        return redirect()->back();
    }
    public function bookings()
    {
        $bookings = Booking::all();
        return view('admin.booking', compact('bookings'));
    }
    public function delete_booking($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back();

    }
    public function book_approve($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'Approve';
        $booking->save();
        return redirect()->back();

    }
    public function book_reject($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'Rejected';
        $booking->save();
        return redirect()->back();

    }
    public function view_gallery()
    {
        $gallery = Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }
    public function upload_gallery(Request $request)
    {
        $data = new Gallery;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('gallery', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
    public function delete_image($id)
    {
        $data = Gallery::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function view_messages()
    {
        $contacts = Contact::all();
        return view('admin.messages', compact('contacts'));
    }
    public function send_mail($id)
    {
        $data = Contact::find($id);
        return view('admin.send_mail', compact('data'));
    }
    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'end_line' => $request->end_line,
        ];
        Notification::send($data, new MyFirstNotification($details));
        return redirect()->back();
    }

}
