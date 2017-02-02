<?php

namespace App\Http\Controllers\Api;

use App\Analysis_request;
use App\Jobs\TechAnalysis;
use App\Log;
use GrahamCampbell\GitHub\Facades\GitHub;
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

        $analysis_request = new Analysis_request();

        $analysis_request->user_id = $user->id;

        $analysis_request->primary_email = $request->primary_email;

        $analysis_request->code_repo = $request->code_repo;

        $analysis_request->job_type = $request->job_type;

        $analysis_request->other_details = json_encode($request->all());

        $analysis_request->status = 0;

        $analysis_request->save();

        $this->dispatch(new TechAnalysis(\GuzzleHttp\json_encode($request->all())));
        return Response::create(['success'=>1,'status'=>'0','status_message'=>'Not Started','message'=>'Received new repo to score','code_repo' => $request->input('code_repo'), 'code' => 200], 200);
    }


    public function testJob(){

        //$result = GitHub::repo()->show('le-yo', 'mpesa');
        $result = GitHub::user()->show('le-yo');

        //$client->api('user')->find('KnpLabs');
        print_r($result);
        exit;

    }


    }
