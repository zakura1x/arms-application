<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHController extends Controller
{
    public function index()
    {
      return view('programhead.home');
    }

    public function plan()
    {
      return view('programhead.plan');
    }

    public function createplan()
    {
      return view('programhead.classmanage.createldp');
    }

    public function questionbank()
    {
      return view('programhead.questionbank');
    }

    public function class()
    {
      return view('programhead.class');
    }

    public function faculty()
    {
      return view('programhead.faculty');
    }

    public function addfaculty()
    {
      return view('programhead.facultymanage.addfaculty');
    }

    public function settings()
    {
      return view('programhead.settings');
    }
}
