<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coderlytic;
use Amranidev\Ajaxis\Ajaxis;
use Maatwebsite\Excel\Facades\Excel;
use URL;
use GrahamCampbell\GitHub\Facades\GitHub;
/**
 * Class CoderlyticController.
 *
 * @author  The scaffold-interface created at 2017-01-11 04:31:25pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CoderlyticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function generateAnalytics($id){

        //instantiate new coder

        $coderlytic = Coderlytic::find($id);
        $repo = $coderlytic->repo_reviewed;
        $result = GitHub::repo()->show($coderlytic->first_name, $repo);

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

        $result2 = GitHub::repo()->contributors($coderlytic->first_name, $repo);


        $coderlytic->no_of_contributors = count($result2);

        foreach($result2 as $key=>$value){

            if($value['id'] == $result['owner']['id']){
                $coderlytic->no_of_commits = $value['contributions']-1;
            }

        }
        $coderlytic->code_modularization = 0;

        $coderlytic->save();
        return redirect('coderlytic');

    }

    public function index()
    {
        $title = 'Github Analysis';
        $coderlytics = Coderlytic::paginate(15);
        return view('coderlytic.index',compact('coderlytics','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function download(){
        $coderlytics = Coderlytic::all()->toArray();
        Excel::create('Coderlytics-Report', function($excel) use($coderlytics){
            // Set the title
            $excel->setTitle("Coderlytics-github-report");

            // Chain the setters
            $excel->setCreator('Leonard')
                ->setCompany('Brave')
                ->setLastModifiedBy('Leonard')
                ->setKeywords('Github,Brave, Analysis');

            $excel->setDescription('Brave : Coderlytics-github-report');
            $excel->sheet('Brave_Coderlytics_github_report', function($sheet) use($coderlytics){
                    $sheet->fromArray($coderlytics);
            });
        })->download('xls');
    }
    public function create()
    {
        $title = 'Create - coderlytic';
        
        return view('coderlytic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = $request->username;
        $repo = $request->repo;

        $coderlytic = Coderlytic::whereFirstName($username)->first();
        if(!$coderlytic){
        $coderlytic = new Coderlytic();
        }
        $result = GitHub::repo()->show($username, $repo);

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

        $coderlytic->code_comment = 1;

        $result2 = GitHub::repo()->contributors($username, $repo);


        $coderlytic->no_of_contributors = count($result2);

        foreach($result2 as $key=>$value){

            if($value['id'] == $result['owner']['id']){
                $coderlytic->no_of_commits = $value['contributions'];
            }

        }
        $coderlytic->code_modularization = 0;

        $coderlytic->save();

//
//        $coderlytic = new Coderlytic();
//
//        $coderlytic->first_name = $request->first_name;
//
//
//        $coderlytic->second_name = $request->second_name;
//
//
//        $coderlytic->email_add = $request->email_add;
//
//
//        $coderlytic->github_url = $request->github_url;
//
//
//        $coderlytic->repo_reviewed = $request->repo_reviewed;
//
//
//        $coderlytic->code_comment = $request->code_comment;
//
//
//        $coderlytic->readme__file = $request->readme__file;
//
//
//        $coderlytic->no_of_commits = $request->no_of_commits;
//
//
//        $coderlytic->no_of_contributors = $request->no_of_contributors;
//
//
//        $coderlytic->code_modularization = $request->code_modularization;
//
//
//
//        $coderlytic->save();

        //$pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
//        $pusher->trigger('test-channel',
//                         'test-event',
//                        ['message' => 'A new coderlytic has been created !!']);

        return redirect('coderlytic');
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
        $title = 'Show - coderlytic';

        if($request->ajax())
        {
            return URL::to('coderlytic/'.$id);
        }

        $coderlytic = Coderlytic::findOrfail($id);
        return view('coderlytic.show',compact('title','coderlytic'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - coderlytic';
        if($request->ajax())
        {
            return URL::to('coderlytic/'. $id . '/edit');
        }

        
        $coderlytic = Coderlytic::findOrfail($id);
        return view('coderlytic.edit',compact('title','coderlytic'  ));
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
        $coderlytic = Coderlytic::findOrfail($id);
    	
        $coderlytic->first_name = $request->first_name;
        
        $coderlytic->second_name = $request->second_name;
        
        $coderlytic->email_add = $request->email_add;
        
        $coderlytic->github_url = $request->github_url;
        
        $coderlytic->repo_reviewed = $request->repo_reviewed;
        
        $coderlytic->code_comment = $request->code_comment;
        
        $coderlytic->readme__file = $request->readme__file;
        
        $coderlytic->no_of_commits = $request->no_of_commits;
        
        $coderlytic->no_of_contributors = $request->no_of_contributors;
        
        $coderlytic->code_modularization = $request->code_modularization;
        
        
        $coderlytic->save();

        return redirect('coderlytic');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/coderlytic/'. $id . '/delete');

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
    public function upload(Request $request) {

        ini_set('max_execution_time', 180);

        $file = array('xls' => $request->file('xlsx'));

        $rules = array('xls' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000

        $extension = $request->file('xls')->getClientOriginalExtension(); // getting the file extension

        $fileName = rand(11111,99999).'.'.$extension; // renaming the file


        $request->file('xls')->move('storage',$fileName); // move it to the storage folder in the public assets

        //$results = Excel::selectSheetsByIndex(1)->load();

        //Excel::selectSheets('sheet1')->load();
        Excel::selectSheetsByIndex(1)->load('storage/'.$fileName, function($reader) {

            $reader -> each(function($sheet) {
                $username = $sheet->github_username;

                if((!empty($sheet->github_username)) && (!empty($sheet->repo_reviewed))){

                $coderlytic = Coderlytic::whereFirstName($username)->first();
                if(!$coderlytic){
                    $coderlytic = new Coderlytic();
                }

                $coderlytic->first_name = $username;

                $coderlytic->second_name = $sheet->second_name;

                $coderlytic->readme__file = 0;

                $coderlytic->email_add = $sheet->email_address;

                $coderlytic->github_url = "https://github.com/".$username;

                $coderlytic->repo_reviewed = $sheet->repo_reviewed;

                $coderlytic->code_comment = 0;

                $coderlytic->no_of_contributors = 0;

                $coderlytic->no_of_commits = 0;


                $coderlytic->code_modularization = 0;

                $coderlytic->save();

                }

            });
        });

        return redirect('coderlytic');

    }

    public function destroy($id)
    {
     	$coderlytic = Coderlytic::findOrfail($id);
     	$coderlytic->delete();
        return URL::to('coderlytic');
    }
}
