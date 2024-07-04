<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DController extends Controller
{
  public function index()
  {
      return view('dean.home');
  }

  public function plan()
  {
    return view('dean.plan');
  }
  public function questionbank()
  {
    return view('dean.questionbank');
  }

  public function class()
  {
    return view('dean.class');
  }

  public function settings()
  {
    return view('dean.settings');
  }
}
