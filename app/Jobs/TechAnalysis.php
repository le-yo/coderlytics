<?php

namespace App\Jobs;

use App\Analysis_request;
use App\Coderlytic;
use App\Log;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TechAnalysis implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @param
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @param  AudioProcessor  $processor
     * @return void
     */
    public function handle()
    {
        //change status of request to 1
        $data = \GuzzleHttp\json_decode($this->data);

        $repo = $data->code_repo;

        $email = $data->primary_email;

        $job_type = $data->job_type;

        $AnalysisRequest = Analysis_request::wherePrimaryEmailAndCodeRepoAndJobType($email,$repo,$job_type)->orderBy('id', 'DESC')->first();
        $AnalysisRequest->status = 1;
        $AnalysisRequest->save();
        $exploded = explode("github.com/",$repo);
        $exploded = explode("/",$exploded[1]);

        $username = $exploded[0];
        $repo = $exploded[1];
        $coderlytic = Coderlytic::whereFirstName($username)->first();

        Log::create(array('user_id'=>'TechAnalysis', 'content'=>$repo));
        if(!$coderlytic){
            $coderlytic = new Coderlytic();
        }
        $result = GitHub::repo()->show($username, $repo);

        Log::create(array('user_id'=>'TechAnalysis_github_result', 'content'=>\GuzzleHttp\json_encode($result)));
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

        $coderlytic->repo_details = \GuzzleHttp\json_encode($result);
        $rslt = GitHub::user()->show($username);
        $coderlytic->user_details = \GuzzleHttp\json_encode($rslt);

        foreach($result2 as $key=>$value){

            if($value['id'] == $result['owner']['id']){
                $coderlytic->no_of_commits = $value['contributions'];
            }else{
                $coderlytic->no_of_commits = 0;
            }

        }
        $coderlytic->code_modularization = 1;

        if($coderlytic->save()){
            $AnalysisRequest->status = 2;
            $AnalysisRequest->save();
        }
       Log::create(array('user_id'=>'TechAnalysis', 'content'=>$coderlytic));
    }

}
