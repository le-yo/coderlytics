@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Analysis_request Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("analysis_request")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New analysis_request</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>user_id</th>
            <th>primary_email</th>
            <th>code_repo</th>
            <th>job_type</th>
            {{--<th>other_details</th>--}}
            <th>status</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($analysis_requests as $analysis_request) 
            <tr>
                <td>{!!$analysis_request->user_id!!}</td>
                <td>{!!$analysis_request->primary_email!!}</td>
                <td>{!!$analysis_request->code_repo!!}</td>
                <td>{!!$analysis_request->job_type!!}</td>
                {{--<td>{!!$analysis_request->other_details!!}</td>--}}
                @if($analysis_request->status==0)
                <td>Not started</td>
                @elseif($analysis_request->status == 1)
                <td>In progress</td>
                @elseif($analysis_request->status == 2)
                <td>Completed</td>
                @endif
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/analysis_request/{!!$analysis_request->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/analysis_request/{!!$analysis_request->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/analysis_request/{!!$analysis_request->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $analysis_requests->render() !!}

</section>
@endsection