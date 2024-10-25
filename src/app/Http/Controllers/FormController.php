<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function confirm()
    {
        return view('confirm');
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
