<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\About\Contact;
use App\Models\About\OurSkill;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('about.contact');
    }

    public function sendMessage(Request $request)
    {
        $contact = Contact::create([
            'department' => $request->department,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        if($contact)
        {
            return back()->with('success', 'Send Youre Message, Successfully!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }

    public function hireUs()
    {
        $skills = OurSkill::where('status', 1)->get();
        return view('about.hire-us', compact('skills'));
    }

    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        $count = 1;
        return view('admin.contact.contacts', compact('contacts','count'));
    }

    public function showContact(Contact $contact)
    {
        return view('admin.contact.message', compact('contact'));
    }
    
    public function delete(Contact $id)
    {
        $id->delete();

        if($id)
        {
            return back()->with('delete', 'Message Deleted Permanently!');
        }else{
            return back()->with('error', 'Error, Something Went Wrong!');
        }
    }
}
