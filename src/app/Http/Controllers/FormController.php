<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Request;
use App\Http\Requests\ContactRequest;

class FormController extends Controller
{
    public function index()
    {
        return view('contact');
    }


    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'tell1', 'tell2', 'tell3', 'email', 'address', 'building', 'category_id', 'detail']);
        $tell = $contact['tell1'] . $contact['tell2'] . $contact['tell3'];


        return view('confirm', compact('contact', 'tell'));
    }

    public function store(Request $request)
    {
        $content = $request::all();
        Contact::create($content);
        return view('thanks');
    }

    public function correct(Request $request)
    {
        $contact = $request::all();
        /*
       $contact = $request->except['tell'];
       $tell = $request->only['tell'];
       $tell1 = array_slice($tell, 0, 2);
       $tell2 = array_slice(3, 6);
       $tell3 = array_slice(7, 10);
         */
        return redirect('/')->withInput($contact);
    }


    public function thanks()
    {
        return view('thanks');
    }

    public function admin()
    {
        return view('admin');
    }

    public function login()
    {
        return view('login');
    }

}
