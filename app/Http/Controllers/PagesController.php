<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   /* 

     public function __construct()
    {
        $this->middleware('guest');
    }
    
   */


    // Home Page_Root - Update
    public function index()
    {
        return view('index');
    }

    public function start()
    {
        return view('one');
    }

    // Update To New View
    public function finish()
    {
        return view('finish');
    }

    public function complete()
    {
        return view('finish');
    }


    // payment confirmation gateway
    public function final()
    {
        return view('enrolled');
    }

    // cancelled payment
    public function cancel()
    {
        return view('cancel');
    }

}
