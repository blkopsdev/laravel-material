<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function amounts()
    {
        return view('coinprocess.amounts');
    }

    public function sendto()
    {
        return view('coinprocess.sendto');
    }

    public function confirmation()
    {
        return view('coinprocess.confirmation');
    }

    public function sending()
    {
        return view('coinprocess.sending');
    }
}
