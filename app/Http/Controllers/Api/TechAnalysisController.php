<?php

namespace App\Http\Controllers\Api;

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

        $payload = $request->only(['user_id', 'github_repo_url']);
        $validator = Validator::make($payload, $rules);

        Log::create(array('content' =>json_encode($request->all())));
        if ($validator->fails()) {
            return Response::create(['error' => $validator->errors(), 'code' => 422, 'message' => 'Missing field values'], 422);
        }

        $voter = Voter::where('id', '=', $request->input('user_id'))->where('phone', '=', $request->input('phone'))->first();

        return Response::create(['success'=>1,'message'=>'Received new repo to score','github_repo_url' => $request->input('github_repo_url'), 'code' => 200], 200);
    }

    }
