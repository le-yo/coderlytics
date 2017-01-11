@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit coderlytic
    </h1>
    <form method = 'get' action = '{!!url("coderlytic")!!}'>
        <button class = 'btn blue'>coderlytic Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("coderlytic")!!}/{!!$coderlytic->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="first_name" name = "first_name" type="text" class="validate" value="{!!$coderlytic->
            first_name!!}"> 
            <label for="first_name">first_name</label>
        </div>
        <div class="input-field col s6">
            <input id="second_name" name = "second_name" type="text" class="validate" value="{!!$coderlytic->
            second_name!!}"> 
            <label for="second_name">second_name</label>
        </div>
        <div class="input-field col s6">
            <input id="email_add" name = "email_add" type="text" class="validate" value="{!!$coderlytic->
            email_add!!}"> 
            <label for="email_add">email_add</label>
        </div>
        <div class="input-field col s6">
            <input id="github_url" name = "github_url" type="text" class="validate" value="{!!$coderlytic->
            github_url!!}"> 
            <label for="github_url">github_url</label>
        </div>
        <div class="input-field col s6">
            <input id="repo_reviewed" name = "repo_reviewed" type="text" class="validate" value="{!!$coderlytic->
            repo_reviewed!!}"> 
            <label for="repo_reviewed">repo_reviewed</label>
        </div>
        <div class="input-field col s6">
            <input id="code_comment" name = "code_comment" type="text" class="validate" value="{!!$coderlytic->
            code_comment!!}"> 
            <label for="code_comment">code_comment</label>
        </div>
        <div class="input-field col s6">
            <input id="readme__file" name = "readme__file" type="text" class="validate" value="{!!$coderlytic->
            readme__file!!}"> 
            <label for="readme__file">readme__file</label>
        </div>
        <div class="input-field col s6">
            <input id="no_of_commits" name = "no_of_commits" type="text" class="validate" value="{!!$coderlytic->
            no_of_commits!!}"> 
            <label for="no_of_commits">no_of_commits</label>
        </div>
        <div class="input-field col s6">
            <input id="no_of_contributors" name = "no_of_contributors" type="text" class="validate" value="{!!$coderlytic->
            no_of_contributors!!}"> 
            <label for="no_of_contributors">no_of_contributors</label>
        </div>
        <div class="input-field col s6">
            <input id="code_modularization" name = "code_modularization" type="text" class="validate" value="{!!$coderlytic->
            code_modularization!!}"> 
            <label for="code_modularization">code_modularization</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection