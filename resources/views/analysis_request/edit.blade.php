@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit analysis_request
    </h1>
    <form method = 'get' action = '{!!url("analysis_request")!!}'>
        <button class = 'btn btn-danger'>analysis_request Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("analysis_request")!!}/{!!$analysis_request->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="user_id">user_id</label>
            <input id="user_id" name = "user_id" type="text" class="form-control" value="{!!$analysis_request->
            user_id!!}"> 
        </div>
        <div class="form-group">
            <label for="primary_email">primary_email</label>
            <input id="primary_email" name = "primary_email" type="text" class="form-control" value="{!!$analysis_request->
            primary_email!!}"> 
        </div>
        <div class="form-group">
            <label for="code_repo">code_repo</label>
            <input id="code_repo" name = "code_repo" type="text" class="form-control" value="{!!$analysis_request->
            code_repo!!}"> 
        </div>
        <div class="form-group">
            <label for="job_type">job_type</label>
            <input id="job_type" name = "job_type" type="text" class="form-control" value="{!!$analysis_request->
            job_type!!}"> 
        </div>
        <div class="form-group">
            <label for="other_details">other_details</label>
            <input id="other_details" name = "other_details" type="text" class="form-control" value="{!!$analysis_request->
            other_details!!}"> 
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control" value="{!!$analysis_request->
            status!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection