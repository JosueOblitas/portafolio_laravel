<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactarController extends Controller
{
    public function index(){
        return view('contacto');
    }
    public function sendEmail(Request $request){

    }
}
