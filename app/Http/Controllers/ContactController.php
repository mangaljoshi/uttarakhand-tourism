<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'message' => 'required',
    ]);

    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message,
    ]);

    return redirect('/contact')->with('success', 'Message Sent Successfully!');
}
}