<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class uj extends Controller
{
    public function studentReg(Request $request){

        $validator = Validator::make($request->all(),
         [
            'name' => 'required',
            'partnerId' => 'required',
            'studentId' => 'required',
            'className' => 'required',
            'school' => 'required',
            'gender' => 'required',
            'stream' => 'required',
            'subscription_details' => '',            
            ]
        );

        if ($validator->fails()) {
            return response([
                'message' => $validator->messages()->first(),
                'status'  => 400
            ], 400);
        }else{
            // check if user alerady exists or not  
            $user= User::where('ufjStudentId', $request->studentId)->first();
            if($user){
                return response([
                    'message' => 'User Already Exists.',
                    'status'  => 400
                ], 400);
            }else{
                // inserting to db 
                $d = new User;
                $d->name = $request->input('name');
                $d->ufjStudentId = $request->input('studentId');
                $d->partnerId = $request->input('partnerId');
                $d->className = $request->input('name');
                $d->school = $request->input('school');
                $d->gender = $request->input('gender');
                $d->stream = $request->input('stream');
                $d->subscription_details = json_encode($request->input('subscription_details'));
                $d->save();
                return response([
                    'studentid'    => $d->id,
                    'message' => 'User Registered Successfully.',
                    'status'  => 200
                ], 200);    
            }
        }
    }


    function studentLogin(Request $request)
    {
        $validator = Validator::make($request->all(),
         [
            'partnerId' => 'required',
            'studentId' => 'required',
            'content_key' => 'required'
        ]
        );

        if ($validator->fails()) {
            return response([
                'message' => $validator->messages()->first(),
                'status'  => 400
            ], 400);
        }

        $user= User::where(['partnerId'=> $request->partnerId,'ufjStudentId'=>$request->studentId])->first();
        if (!$user ) {
                return response([
                    'message' => 'These credentials do not match our records.',
                    'status'  => false
                ], 400);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                "status" => "200",
                "message" => "Success",                
                'studenttoken' => $token,
                "iframelink" => "www.dailylearn.in",
            ];
             return response($response, 200);
    }

    public function studentSubmission(Request $request){

        $validator = Validator::make($request->all(),
         [
            'partnerId' => 'required',
            'studentId' => 'required',
            'content_key' => 'required',
            'data' => 'required',
        ]
        );

        if ($validator->fails()) {
            return response([
                'message' => $validator->messages()->first(),
                'status'  => 400
            ], 400);
        }else{
            // check if user alerady exists or not  
            $user= User::where(['partnerId'=> $request->partnerId,'ufjStudentId'=>$request->studentId])->first();
            if($user){
                // inserting to content key with data db 
                $d = User::find($user->id);
                $oldData = $user->studentSubmission;
                if(isset($oldData) and !empty($oldData) ){
                    $oldData = json_decode($oldData);
                    $c = $request->content_key;
                    $oldData->$c = $request->input('data');
                    $d->studentSubmission = json_encode($oldData);
                }else{
                    $d->studentSubmission = json_encode([$request->content_key=>$request->input('data')]);
                }
                $d->update();
                return response([
                    'message' => 'Result Saved Successfully.',
                    'status'  => 200
                ], 200);    
            }else{
                return response([
                    'message' => 'Student Does Not Exists.',
                    'status'  => 400
                ], 400);
            }
        }
    }


}
