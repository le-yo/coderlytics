@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Analysi Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("analysi")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New analysi</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>first_name</th>
            <th>second_name</th>
            <th>email_add</th>
            <th>github_url</th>
            <th>repo_reviewed</th>
            <th>code_comment</th>
            <th>readme__file</th>
            <th>no_of_commits</th>
            <th>no_of_contributors</th>
            <th>code_modularization</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($analyses as $analysi) 
            <tr>
                <td>{!!$analysi->first_name!!}</td>
                <td>{!!$analysi->second_name!!}</td>
                <td>{!!$analysi->email_add!!}</td>
                <td>{!!$analysi->github_url!!}</td>
                <td>{!!$analysi->repo_reviewed!!}</td>
                <td>{!!$analysi->code_comment!!}</td>
                <td>{!!$analysi->readme__file!!}</td>
                <td>{!!$analysi->no_of_commits!!}</td>
                <td>{!!$analysi->no_of_contributors!!}</td>
                <td>{!!$analysi->code_modularization!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/analysi/{!!$analysi->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/analysi/{!!$analysi->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/analysi/{!!$analysi->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $analyses->render() !!}

</section>
@endsection