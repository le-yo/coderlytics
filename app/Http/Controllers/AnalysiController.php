<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Analysi;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AnalysiController.
 *
 * @author  The scaffold-interface created at 2017-01-11 05:55:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AnalysiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function generateAnalytics(){
        //instantiate new coder
        $coderlytic = new Coderlytic();
        $result = GitHub::repo()->show('williwambu', 'DataStructuresAndAlgorithms');

        $coderlytic->first_name = $result['owner']['login'];

        $coderlytic->second_name = $result['owner']['login'];

        if($result['has_wiki'] == 1){
            $coderlytic->readme__file = 1;
        }else{
            $coderlytic->readme__file = 0;
        }

        $coderlytic->email_add = $coderlytic->first_name."@github.com";

        $coderlytic->github_url = $result['owner']['html_url'];

        $coderlytic->repo_reviewed = $result['html_url'];

        $coderlytic->code_comment = 0;

        $result2 = GitHub::repo()->contributors('williwambu', 'DataStructuresAndAlgorithms');


        $coderlytic->no_of_contributors = count($result2);

        foreach($result2 as $key=>$value){

            if($value['id'] == $result['owner']['id']){
                $coderlytic->no_of_commits = $value['contributions']-1;
            }

        }
        $coderlytic->code_modularization = 0;

        echo($coderlytic->save());

    }

    public function index()
    {
        $title = 'Index - analysi';
        $analyses = Analysi::paginate(6);
        return view('analysi.index',compact('analyses','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - analysi';
        
        return view('analysi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $analysi = new Analysi();

        
        $analysi->first_name = $request->first_name;

        
        $analysi->second_name = $request->second_name;

        
        $analysi->email_add = $request->email_add;

        
        $analysi->github_url = $request->github_url;

        
        $analysi->repo_reviewed = $request->repo_reviewed;

        
        $analysi->code_comment = $request->code_comment;

        
        $analysi->readme__file = $request->readme__file;

        
        $analysi->no_of_commits = $request->no_of_commits;

        
        $analysi->no_of_contributors = $request->no_of_contributors;

        
        $analysi->code_modularization = $request->code_modularization;

        
        
        $analysi->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new analysi has been created !!']);

        return redirect('analysi');
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
        $title = 'Show - analysi';

        if($request->ajax())
        {
            return URL::to('analysi/'.$id);
        }

        $analysi = Analysi::findOrfail($id);
        return view('analysi.show',compact('title','analysi'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - analysi';
        if($request->ajax())
        {
            return URL::to('analysi/'. $id . '/edit');
        }

        
        $analysi = Analysi::findOrfail($id);
        return view('analysi.edit',compact('title','analysi'  ));
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
        $analysi = Analysi::findOrfail($id);
    	
        $analysi->first_name = $request->first_name;
        
        $analysi->second_name = $request->second_name;
        
        $analysi->email_add = $request->email_add;
        
        $analysi->github_url = $request->github_url;
        
        $analysi->repo_reviewed = $request->repo_reviewed;
        
        $analysi->code_comment = $request->code_comment;
        
        $analysi->readme__file = $request->readme__file;
        
        $analysi->no_of_commits = $request->no_of_commits;
        
        $analysi->no_of_contributors = $request->no_of_contributors;
        
        $analysi->code_modularization = $request->code_modularization;
        
        
        $analysi->save();

        return redirect('analysi');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/analysi/'. $id . '/delete');

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
     	$analysi = Analysi::findOrfail($id);
     	$analysi->delete();
        return URL::to('analysi');
    }
}
