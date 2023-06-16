<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::all();
        $data =[
            'messages' => $messages,
        ];
        return view('dashboard.messages.index')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName'         => 'required|max:255',
            'email'         => 'required',
            'phone'   => 'required',
            'subject'   => 'required',
            'message'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('frontend.feedback')
                ->withErrors($validator)
                ->withInput();
        }
        $fullName = $request->get('fullName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $subject = $request->get('subject');
        $message = $request->get('message');

        Message::create([
           'fullName' => $fullName,
           'email' => $email,
           'phone' => $phone,
           'subject' => $subject,
           'message' => $message,
        ]);
        Session::flash('flash_message', 'Пораката е испратена!');
        return redirect()->back();
    }
    public function show($id)
    {
        $message = Message::FindorFail($id);
        $data = [
            'message' => $message,
        ];
        return view('dashboard.messages.show')->with($data);
    }

    public function update(Request $request, $id)
    {
        $message = Message::FindorFail($id);

    }
}
