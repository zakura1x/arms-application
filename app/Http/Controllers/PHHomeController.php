<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHHomeController extends Controller
{
    public function index()
    {
        return view('programhead.home');
    }

    public function plan()
    {
      return view('programhead.plan');
    }
    public function questionbank()
    {
      return view('programhead.questionBankManage.questionbank');
    }

    public function class()
    {
      return view('programhead.class');
    }

    public function settings()
    {
      return view('programhead.settings');
    }
}
