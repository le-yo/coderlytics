<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rank;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class RankController.
 *
 * @author  The scaffold-interface created at 2017-02-01 11:08:05pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - rank';
        $ranks = Rank::all();
        return view('rank.index',compact('ranks','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - rank';
        
        return view('rank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rank = new Rank();

        
        $rank->first_name = $request->first_name;

        
        $rank->second_name = $request->second_name;

        
        $rank->email_address = $request->email_address;

        
        $rank->Organization = $request->Organization;

        
        $rank->dev_manager = $request->dev_manager;

        
        $rank->senior_dev = $request->senior_dev;

        
        $rank->scrum = $request->scrum;

        
        $rank->devops = $request->devops;

        
        $rank->architect = $request->architect;

        
        $rank->product_owner = $request->product_owner;

        
        $rank->quality_lead = $request->quality_lead;

        
        $rank->tester = $request->tester;

        
        $rank->junior_dev = $request->junior_dev;

        
        
        $rank->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new rank has been created !!']);

        return redirect('rank');
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
        $title = 'Show - rank';

        if($request->ajax())
        {
            return URL::to('rank/'.$id);
        }

        $rank = Rank::findOrfail($id);
        return view('rank.show',compact('title','rank'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - rank';
        if($request->ajax())
        {
            return URL::to('rank/'. $id . '/edit');
        }

        
        $rank = Rank::findOrfail($id);
        return view('rank.edit',compact('title','rank'  ));
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
        $rank = Rank::findOrfail($id);
    	
        $rank->first_name = $request->first_name;
        
        $rank->second_name = $request->second_name;
        
        $rank->email_address = $request->email_address;
        
        $rank->Organization = $request->Organization;
        
        $rank->dev_manager = $request->dev_manager;
        
        $rank->senior_dev = $request->senior_dev;
        
        $rank->scrum = $request->scrum;
        
        $rank->devops = $request->devops;
        
        $rank->architect = $request->architect;
        
        $rank->product_owner = $request->product_owner;
        
        $rank->quality_lead = $request->quality_lead;
        
        $rank->tester = $request->tester;
        
        $rank->junior_dev = $request->junior_dev;
        
        
        $rank->save();

        return redirect('rank');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/rank/'. $id . '/delete');

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
     	$rank = Rank::findOrfail($id);
     	$rank->delete();
        return URL::to('rank');
    }
}
