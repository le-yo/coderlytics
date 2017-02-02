<?php

namespace App\Http\Controllers;

use App\Coderlytic;
use App\Jobs\TechAnalysis;
use App\Rank;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Analysis_request;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Analysis_requestController.
 *
 * @author  The scaffold-interface created at 2017-02-01 06:06:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Analysis_requestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - analysis_request';
        $analysis_requests = Analysis_request::paginate(6);
        return view('analysis_request.index',compact('analysis_requests','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - analysis_request';
        
        return view('analysis_request.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $analysis_request = new Analysis_request();

        
        $analysis_request->user_id = $request->user_id;

        
        $analysis_request->primary_email = $request->primary_email;

        
        $analysis_request->code_repo = $request->code_repo;

        
        $analysis_request->job_type = $request->job_type;

        
        $analysis_request->other_details = $request->other_details;

        
        $analysis_request->status = $request->status;

        
        
        $analysis_request->save();

        $this->dispatch(new TechAnalysis(\GuzzleHttp\json_encode($request->all())));
        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new analysis_request has been created !!']);

        return redirect('analysis_request');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - analysis_request';

        if($request->ajax())
        {
            return URL::to('analysis_request/'.$id);
        }

        $analysis_request = Analysis_request::findOrfail($id);
        $username = self::getUsernameFromRepo($analysis_request->code_repo);
        $rank = Rank::whereEmailAddress($analysis_request->primary_email)->first();
        $coderlytic = Coderlytic::whereFirstName($username)->first();
        $user_details = \GuzzleHttp\json_decode($coderlytic->user_details);
        $repo_details = \GuzzleHttp\json_decode($coderlytic->repo_details);

        //Watson stuff
        $resp = file_get_contents('http://unleash.mybluemix.net/person/talent/'.$analysis_request->primary_email);
        $resp = \GuzzleHttp\json_decode($resp);
        if(!empty($resp->applications[0]->scores->output->personality)){

        $personality = $resp->applications[0]->scores->output->personality;
        }else{
         $personality = array();
        }

        return view('analysis_request.show',compact('title','analysis_request','rank','coderlytic','user_details','repo_details','personality'));
    }
    public function getUsernameFromRepo($repo){
        $exploded = explode("github.com/",$repo);
        $exploded = explode("/",$exploded[1]);
        $username = $exploded[0];
        return $username;
    }
    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - analysis_request';
        if($request->ajax())
        {
            return URL::to('analysis_request/'. $id . '/edit');
        }

        
        $analysis_request = Analysis_request::findOrfail($id);
        return view('analysis_request.edit',compact('title','analysis_request'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $analysis_request = Analysis_request::findOrfail($id);
    	
        $analysis_request->user_id = $request->user_id;
        
        $analysis_request->primary_email = $request->primary_email;
        
        $analysis_request->code_repo = $request->code_repo;
        
        $analysis_request->job_type = $request->job_type;
        
        $analysis_request->other_details = $request->other_details;
        
        $analysis_request->status = $request->status;
        
        
        $analysis_request->save();

        $this->dispatch(new TechAnalysis(\GuzzleHttp\json_encode($request->all())));

        return redirect('analysis_request');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/analysis_request/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$analysis_request = Analysis_request::findOrfail($id);
     	$analysis_request->delete();
        return URL::to('analysis_request');
    }
}
