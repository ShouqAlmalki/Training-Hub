<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller{

    public function stuHome()
    {
        return view('student.stuHome');
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
                    public function appPub()
                    {
                        return view('supervisor.appPub');
                    }

                     public function welcome()
                     {
                          return view('welcome');
                     }

                      public function experience()
                      {
                          return view('student.experience');
                      }
                      public function newExperience()
                      {
                          return view('student.newExperience');
                      }

                      public function previousExperience()
                      {
                          return view('submission.previousExperience');
                      }


                       public function stuaccount()
                       {
                       return view('student.stuaccount');
                       }
                       public function reviewing()
                       {
                       return view('supervisor.reviewing');
                       }
                       public function suphome()
                       {
                       return view('supervisor.suphome');
                       }
                       public function messaging()
                       {
                       return view('supervisor.messaging');
                       }

               public function submit()
                         {//return view('tasks.edit');


                            $Type = request()->Type;
                            $Date = request()->Date;
                            $State = request()->State;

                             return to_route(route: 'submission.documents'); }
}
