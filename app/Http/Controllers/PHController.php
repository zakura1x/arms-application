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
      return view('programhead.planmanage.createldp');
    }

    public function createtos()
    {
      return view('programhead.planmanage.createtos');
    }

    public function plandetails()
    {
      return view('programhead.planmanage.editldp');
    }
    public function questionbank()
    {
      return view('programhead.questionbank');
    }

    public function createquestion()
    {
      return view('programhead.questionbankmanage.createquestion');
    }

    public function class()
    {
      return view('programhead.class');
    }

    public function clickedClass()
    {
      return view('programhead.classmanage.class1inside');
    }

    public function createtest()
    {
      return view('programhead.classmanage.createassessment');
    }

    public function assessmentdetails()
    {
      return view('programhead.classmanage.assessmentdetails');
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
