<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class AdminController extends Controller
{
    public function messages()
    {
        $messages = Contact::latest()->get();

        return view('admin.messages', compact('messages'));
    }
}