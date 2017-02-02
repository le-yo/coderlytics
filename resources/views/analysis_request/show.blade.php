@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')


    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-circle" src="{{$user_details->avatar_url}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ucwords($coderlytic->first_name)}}</h3>

              <p class="text-muted text-center">{{ucwords($user_details->location)}}</p>

              <ul class="list-group list-group-unbordered">
               <li class="list-group-item">
                                <b>Public Repos</b> <a class="pull-right">1{{ucwords($user_details->public_repos)}}</a>
                              </li>
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">{{ucwords($user_details->followers)}}</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">{{ucwords($user_details->following)}}</a>
                </li>

              </ul>

              {{--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>--}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About {{ucwords($coderlytic->first_name)}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Github URL</strong>

              <p class="text-muted">
                {{$user_details->html_url}}
              </p>

              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Company</strong>

                          <p class="text-muted">
                            {{$user_details->location}}
                          </p>

                          <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                  {{$user_details->location}}

              <hr>

              {{--<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>--}}

              {{--<p>--}}
                {{--<span class="label label-danger">UI Design</span>--}}
                {{--<span class="label label-success">Coding</span>--}}
                {{--<span class="label label-info">Javascript</span>--}}
                {{--<span class="label label-warning">PHP</span>--}}
                {{--<span class="label label-primary">Node.js</span>--}}
              {{--</p>--}}

              {{--<hr>--}}

              {{--<strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>--}}

              {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>--}}
            {{----}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Code Quality</a></li>
              <li><a href="#timeline" data-toggle="tab">Personality</a></li>
              <li><a href="#settings" data-toggle="tab">Historical Skills</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
      <div class="row">

             <div class="col-md-8">
               <div class="box">
                 <div class="box-header with-border">
                   <h3 class="box-title">Repo: {{$repo_details->html_url}} </h3>
                    <p class="text-muted text-center">{{$repo_details->description}}</p>

                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                   <table class="table table-bordered">
                     <tr>
                       <th style="width: 10px">#</th>
                       <th>Item</th>
                       <th>score/count</th>
                       {{--<th style="width: 40px">Score</th>--}}
                     </tr>


            <tr>

                       <td>1.</td>
                <td>
                    <b><i>Comments Code : </i></b>
                </td>

                <td><span class="badge bg-yellow">{!!$coderlytic->code_comment!!}</span></td>
            </tr>
            <tr>

                       <td>2.</td>
                <td>
                    <b><i>Readme file present : </i></b>
                </td>
                <td><span class="badge bg-light-blue">{!!$coderlytic->readme__file!!}</span></td>
            </tr>
            <tr>

                       <td>3.</td>
                <td>
                    <b><i>no_of_commits : </i></b>
                </td>
                <td><span class="badge bg-green">{!!$coderlytic->no_of_commits!!}</span></td>
            </tr>
            <tr>

                       <td>4.</td>
                <td>
                    <b><i>no_of_contributors : </i></b>
                </td>
                <td><span class="badge bg-yellow">{!!$coderlytic->no_of_contributors!!}</span></td>
            </tr>
            <tr>

                       <td>5.</td>
                <td>
                    <b><i>code_modularization : </i></b>
                </td>
                <td><span class="badge bg-red">{!!$coderlytic->code_modularization!!}</span></td>

                     </tr>
                   </table>
                 </div>
                 <!-- /.box-body -->
                 <div class="box-footer clearfix">
                   <ul class="pagination pagination-sm no-margin pull-right">
                     <li><a href="#">&laquo;</a></li>
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">&raquo;</a></li>
                   </ul>
                 </div>
               </div>
               <!-- /.box -->
               <!-- /.box -->
             </div>

           </div>
           <!-- /.row -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->

      <div class="row">
        <div class="col-md-9">
          <div class="box box-solid">
            <div class="box-header with-border">
              {{--<h3 class="box-title"> Accordion</h3>--}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                   @if(count($personality)>0)
                                    @foreach($personality as $key=>$person)

                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}">
                        {{$person->name}}
                      </a>
                    </h4>
                  </div>
                  @if($key == 0)
                  <div id="collapse{{$key}}" class="panel-collapse collapse in">
                   @else
                  <div id="collapse{{$key}}" class="panel-collapse collapse">
                   @endif
                    <div class="box-body">
                      @foreach($person->children as $pc)
                      <div class="clearfix">
                       <span class="pull-left">{{$pc->name}}</span>
                       <small class="pull-right">{{number_format($pc->percentile*100,0)}}%</small>
                       </div>
                       <div class="progress xs">
                       <div class="progress-bar progress-bar-green" style="width: {{number_format($pc->percentile*100,0)}}%;"></div>
                        </div>
                        @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
                @else
                 <div class="clearfix">
                  <span class="pull-left">No data</span>
                   </div>
               @endif
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
            <div class="row">
              <div class="col-md-6">
                <div class="clearfix">

                  <img src="{{ URL::asset('jumo_pic/'.$analysis_request->primary_email.'.jpg') }}" alt="No Data" height="150%" width="150%" class="margin">
                                                     {{--<span class="pull-left">No data</span>--}}
                                    </div>
               <!-- /.box -->
               <!-- /.box -->
             </div>
             </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>


{{--<section class="content">--}}
    {{--<h1>--}}
        {{--Show analysis_request--}}
    {{--</h1>--}}
    {{--<br>--}}
    {{--<form method = 'get' action = '{!!url("analysis_request")!!}'>--}}
        {{--<button class = 'btn btn-primary'>analysis_request Index</button>--}}
    {{--</form>--}}
    {{--<br>--}}
    {{--<table class = 'table table-bordered'>--}}
        {{--<thead>--}}
            {{--<th>Key</th>--}}
            {{--<th>Value</th>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>user_id : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->user_id!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>primary_email : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->primary_email!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>code_repo : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->code_repo!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>job_type : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->job_type!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>other_details : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->other_details!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>status : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->status!!}</td>--}}
            {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--</section>--}}
@endsection

@section('scripts')

@endsection