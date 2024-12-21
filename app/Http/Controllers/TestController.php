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
              return view('student.submission');
          }

      public function documents()
               {
                   return view('submission.documents');
               }

           public function previous()
                    {
                        return view('submission.previous');
                    }

               public function submit()
                         {//return view('tasks.edit');


                            $Type = request()->Type;
                            $Date = request()->Date;
                            $State = request()->State;

                             return to_route(route: 'submission.documents'); }
}
