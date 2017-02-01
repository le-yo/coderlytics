<?php

namespace App\Http\Controllers\Api;

use App\Jobs\TechAnalysis;
use App\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Response;

class TechAnalysisController extends Controller
{
    //
    public function request(Request $request)
    {
        $rules = [
            'code_repo' => ['required'],
            'primary_email' => ['required'],
            'job_type' => ['required'],
        ];

        $user = $request->user();

        $payload = $request->only(['code_repo', 'primary_email','job_type']);
        $validator = Validator::make($payload, $rules);

       $log = Log::create(array('user_id'=>$user->id,'content' =>json_encode($request->all())));
        if ($validator->fails()) {
            return Response::create(['error' => $validator->errors(), 'code' => 422, 'message' => 'Missing field values'], 422);
        }
//        $job = (new TechAnalysis(\GuzzleHttp\json_encode($request->all())))->delay(10);
//        $this->dispatch($job);
        $this->dispatch(new TechAnalysis(\GuzzleHttp\json_encode($request->all())));
        return Response::create(['success'=>1,'status'=>'0','status_message'=>'Not Started','message'=>'Received new repo to score','code_repo' => $request->input('code_repo'), 'code' => 200], 200);
    }


    public function testJob(){
        $data = '{"code_repo":"http:\/\/github.com\/le-yo\/mpesa","primary_email":"leo@devs.mobi","job_type":"test name"}';

        $data = \GuzzleHttp\json_decode($data);

        $repo = $data->code_repo;
        //exit;

    }


    }
