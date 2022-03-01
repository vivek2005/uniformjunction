<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CoursePayment;
use App\Models\Course;
use App\Models\videos;
use App\Models\exam;

class Lms extends Controller
{
    public function index(){
        // echo "Welcome to UJ";
        $courses = Course::where([['user_id',30169],
                                  ['payment_status','=',1]  
                                    ])
                            ->get();
        $data['courses'] = $courses;
        $data['leftNav'] = false;
        $data['currLi'] = ' ';
        return view('lms/myCourses')->with('data',$data);
        // return view('index');
    }
    public function index2(){
        return view('index');
    }

    public function iframeView(){
        $student_id = $_GET['id'];
        $token = $_GET['token'];
        // return view('');
    }
        
    public function myAccount(){
        $data['leftNav'] = false;
        $data['currLi'] = ' ';
        return view('lms/myAccount')->with('data',$data);
    }
    public function studyNotes(){
        $course_id = session('course_id');
        // getting all study notes of this course id 
        $studyNotes = videos::where([['course_id', $course_id ],
                                  ['sub_topic_type','=', 'Study Notes' ]  
                                    ])
                            ->get();
        $data['studyNotes'] = $studyNotes;
        $data['leftNav'] = true;
        $data['currLi'] = 'study';
        return view('lms/studyNotes')->with('data',$data);
    }
    public function tests(){
        $course_id = session('course_id');
        // getting all tests of this course id 
        $dailyTests = videos::where([['course_id', 1 ],
                                  ['sub_topic_type','=', 'Daily Test' ]  
                                    ])
                            ->get(['id','sub_topic_name']);
        $data['dailyTests'] = $dailyTests;
        $data['leftNav'] = true;
        $data['currLi'] = 'tests';
        return view('lms/tests')->with('data',$data);
    }
    public function browseCourse(){
        $course_id = $_GET['course_id'];
        $student_id = $_GET['student_id'];


        session(['course_id' => $course_id]);
        if( isset($course_id) and !empty($course_id)  ){
            // $course_id
            // check that user has purchased this course or not 
            // to do 
            return redirect('/videos');
        }else{
            return redirect('/');
        }
    }
    public function videos(){
        $course_id = session('course_id');
        // getting all the video of this course id 
        $videos = videos::where([['course_id', $course_id ],
                                  ['sub_topic_type','=', 'Live Class' ]  
                                    ])
                        ->get(['class_video','sub_topic_name']);
        $data['videos'] = $videos;
        $data['leftNav'] = true;
        $data['currLi'] = 'video';
        return view('lms/videos')->with('data',$data);
    }
    public function analytics(){
        $data['leftNav'] = true;
        $data['currLi'] = 'analytics';
        return view('lms/analytics')->with('data',$data);
    }

    public function watchVideo(){
        $data['video_id'] = $_GET['v'];
        $data['leftNav'] = true;
        $data['currLi'] = 'none';
        $course_id = session('course_id');
        // getting all the video of this course id 
        $videos = videos::where([['course_id', $course_id ],
                                  ['sub_topic_type','=', 'Live Class' ]  
                                    ])
                            ->get(['class_video','sub_topic_name']);
        $data['videos'] = $videos;
        return view('lms/watchVideo')->with('data',$data);
    }
    public function exam(){
        $test_id = $_GET['test'];
        $test_name = $_GET['name'];        
        $ques = exam::where([['sub_topic_id', $test_id ],
                                  ['status','=', 1 ]  
                                    ])
                            ->get();
        if(isset($test_id) and !empty($test_id) and !empty($ques) ){
            $data['ques'] = $ques;
            $data['test_name'] = $test_name;
            $data['leftNav'] = false;
            $data['currLi'] = 'none';
            $data['test_id'] = $test_id;
            return view('lms/examination')->with('data',$data);
        }else{
            echo "wrong test id.";            
        }

    }

}

