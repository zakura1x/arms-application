<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FController extends Controller
{
  public function index()
  {
    return view('faculty.home');
  }

  public function plan()
  {
    return view('faculty.plan');
  }
  public function questionbank()
  {
    return view('faculty.questionbank');
  }

  public function class()
  {
    return view('faculty.class');
  }

  public function settings()
  {
    return view('faculty.settings');
  }

  public function clickedClass()
  {
    return view('faculty.classclicked.class1');
  }

  public function createplan()
  {
    return view('faculty.ldpmanage.createldp');
  }
}
