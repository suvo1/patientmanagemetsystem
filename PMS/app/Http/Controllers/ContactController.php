<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

use App\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }
    public function index()
    {

    }
    public function create()
    {
        
    }

    public function display()
    {
        return view('contact');
    }

}