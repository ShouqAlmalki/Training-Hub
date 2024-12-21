<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
public function home()
     {
         return view('student.home');
     }

     public function submission()
          {
              return view('submission.submission');
          }
     }
