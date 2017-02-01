@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create analysis_request
    </h1>
    <form method = 'get' action = '{!!url("analysis_request")!!}'>
        <button class = 'btn btn-danger'>analysis_request Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("analysis_request")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        {{--<div class="form-group">--}}
            {{--<label for="user_id">user_id</label>--}}
            <input id="user_id" name = "user_id" type="hidden" value="{{Auth::user()->id}}" class="form-control">
        {{--</div>--}}
        <div class="form-group">
            <label for="primary_email">Primary Email</label>
            <input id="primary_email" name = "primary_email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="code_repo">Code Repo</label>
            <input id="code_repo" name = "code_repo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="job_type">Job Type</label>
            <input id="job_type" name = "job_type" type="text" class="form-control">
        </div>
        {{--<div class="form-group">--}}
            {{--<label for="other_details">Other details</label>--}}
            <input id="other_details" name = "other_details" value="tbd" type="hidden" class="form-control">
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="status">status</label>--}}
            <input id="status" name = "status" value="0" type="hidden" class="form-control">
        {{--</div>--}}
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection