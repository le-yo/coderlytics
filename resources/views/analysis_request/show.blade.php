@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show analysis_request
    </h1>
    <br>
    <form method = 'get' action = '{!!url("analysis_request")!!}'>
        <button class = 'btn btn-primary'>analysis_request Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>user_id : </i></b>
                </td>
                <td>{!!$analysis_request->user_id!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>primary_email : </i></b>
                </td>
                <td>{!!$analysis_request->primary_email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>code_repo : </i></b>
                </td>
                <td>{!!$analysis_request->code_repo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>job_type : </i></b>
                </td>
                <td>{!!$analysis_request->job_type!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>other_details : </i></b>
                </td>
                <td>{!!$analysis_request->other_details!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>status : </i></b>
                </td>
                <td>{!!$analysis_request->status!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection