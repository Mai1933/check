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
        $content = $request->only(['last_name', 'first_name', 'gender', 'tell', 'email', 'address', 'building', 'category_id', 'detail']);
        Contact::create($content);
        return view('thanks');
    }

    public function button(Request $request)
    {
        $contact = $request::all();
        
        if ($request->has('send')) {
            return redirect('/confirm/store')->withInput($contact);
        } elseif ($request->has('correct')) {
            return back()->withInput($contact);
        }
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

    public function register()
    {
        return view('register');
    }

}
