@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create analysi
    </h1>
    <form method = 'get' action = '{!!url("analysi")!!}'>
        <button class = 'btn btn-danger'>analysi Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("analysi")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="first_name">first_name</label>
            <input id="first_name" name = "first_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="second_name">second_name</label>
            <input id="second_name" name = "second_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email_add">email_add</label>
            <input id="email_add" name = "email_add" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="github_url">github_url</label>
            <input id="github_url" name = "github_url" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="repo_reviewed">repo_reviewed</label>
            <input id="repo_reviewed" name = "repo_reviewed" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="code_comment">code_comment</label>
            <input id="code_comment" name = "code_comment" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="readme__file">readme__file</label>
            <input id="readme__file" name = "readme__file" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="no_of_commits">no_of_commits</label>
            <input id="no_of_commits" name = "no_of_commits" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="no_of_contributors">no_of_contributors</label>
            <input id="no_of_contributors" name = "no_of_contributors" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="code_modularization">code_modularization</label>
            <input id="code_modularization" name = "code_modularization" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection