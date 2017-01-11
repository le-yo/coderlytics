@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

{{--<section class="content-header">--}}
{{--<br>--}}
	{{--<h1>--}}
	{{--Transporter--}}
	{{--</h1>--}}
	{{--<ol class="breadcrumb">--}}
		{{--<li><a href="/coderlytic"><i class="fa fa-dashboard"></i> Home</a></li>--}}
		{{--<li class="active">Git Analysis</li>--}}
	{{--</ol>--}}
	{{--<br>--}}
{{--</section>--}}

<section class="content">

  <div class="box box-header with-border col-md-10">
    <h1>
       Github Repo Analysis
    </h1>
        <div class="row">
        &nbsp; &nbsp; &nbsp;<a href='{!!url("coderlytic")!!}/create'>
            <button class = 'btn red' type = 'submit'>Add new Repo</button>
        </a><a href='{!!url("analytics/download")!!}'>
                        <button class = 'btn red' type = 'submit'>Download</button>
                    </a>
                    <br>
                    <br>
                    <form method="POST" action='{!!url("upload")!!}' accept-charset="UTF-8" enctype="multipart/form-data">
                    &nbsp; &nbsp; &nbsp;&nbsp;<label class="btn btn-default btn-file">
                    {{ csrf_field() }}


                        Select Excel <input type="file" name="xls" class="hidden">
                    </label>
                    <button class = 'btn red' type = 'submit'>Upload</button>
                    </form>
                <br>
                </div>
                <br>

    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>user</th>
            {{--<th>second_name</th>--}}
            {{--<th>email_add</th>--}}
            {{--<th>github_url</th>--}}
            {{--<th>repo</th>--}}
            <th>comments</th>
            <th>readme</th>
            <th>Commits</th>
            <th>Contributors</th>
            <th>modularization</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($coderlytics as $coderlytic) 
            <tr>
                <td>{!!$coderlytic->first_name!!}</td>
                {{--<td>{!!$coderlytic->second_name!!}</td>--}}
                {{--<td>{!!$coderlytic->email_add!!}</td>--}}
                {{--<td>{!!$coderlytic->github_url!!}</td>--}}
                {{--<td>{!!$coderlytic->repo_reviewed!!}</td>--}}
                <td>{!!$coderlytic->code_comment!!}</td>
                <td>{!!$coderlytic->readme__file!!}</td>
                <td>{!!$coderlytic->no_of_commits!!}</td>
                <td>{!!$coderlytic->no_of_contributors!!}</td>
                <td>{!!$coderlytic->code_modularization!!}</td>
                <td>
                    <div class = 'row'>
                        {{--<a href = '#' class = 'delete btn-floating red' data-link = "/coderlytic/{!!$coderlytic->id!!}/generate" ><i class = 'material-icons'>Generate Report</i></a>--}}
                        <a href = '{!!url("/analysis/generate/$coderlytic->id")!!}' class = 'viewEdit btn-floating blue'><i class = 'material-icons'>Generate Analytics</i></a>
                        {{--<a href = '#' class = 'viewShow btn-floating orange' data-link = '/coderlytic/{!!$coderlytic->id!!}'><i class = 'material-icons'>View</i></a>--}}
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $coderlytics->render() !!}
</div>
</section>
@endsection