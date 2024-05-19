<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Room;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    //
    public function room_detail($id)
    {
        $data = Room::find($id);
        return view('home.room_detail', compact('data'));
    }
    public function room()
    {
        $rooms = Room::all();
        return view('home.rooms', compact('rooms'));
    }
    public function about()
    {
        return view('home.about');
    }


    public function blog()
    {
        return view('home.blog');
    }
    // public function contact()
    // {
    //     return view('home.contact');
    // }
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('home.gallery', compact('gallery'));
    }
    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'date|after:start_date',
        ]);
        $data = new Booking();
        $data->room_id = $id;
        $data->name = $request->named;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)->exists();
        if ($isBooked) {
            return redirect()->back()->with('message', 'Room Already Booked try another date');
        } else {
            $data->start_date = $request->start_date;
            $data->end_date = $request->end_date;
            $data->save();
            return redirect()->back()->with('message', 'Room Booked Successfully');
        }
    }
    public function contact(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->named;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('message', 'Message sent successfully');
    }
}
