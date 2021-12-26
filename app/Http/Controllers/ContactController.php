<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactService;
class ContactController extends Controller
{
    public function  __construct(ContactService $contactService) {
        $this->contactService = $contactService; 
    }


    public function create(Request $request) {
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|max:30',
            'contact_number' => 'required|max:20|regex:/^([+\d])\d{5,20}$/',
            'message' => 'required|max:500'
        ]);
        $input = $request->only(['name','email','contact_number','message']);
        $this->contactService->create($input);
        return redirect()->back()->with(['message' => 'Messages sent successfully. We will get in touch with you soon']);
    }

    public function show() {
        return view('contact');
    }
}
