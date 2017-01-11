@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create coderlytic
    </h1>
    <form method = 'get' action = '{!!url("coderlytic")!!}'>
        <button class = 'btn blue'>New Repo</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("coderlytic")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="username" name = "username" type="text" class="validate">
            <label for="first_name">Github username without http</label>
        </div>
        {{--<div class="input-field col s6">--}}
            {{--<input id="second_name" name = "second_name" type="text" class="validate">--}}
            {{--<label for="second_name">second_name</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s6">--}}
            {{--<input id="email_add" name = "email_add" type="text" class="validate">--}}
            {{--<label for="email_add">email_add</label>--}}
        {{--</div>--}}
        <div class="input-field col s6">
            <input id="repo" name = "repo" type="text" class="validate">
            <label for="repo">Repository to be analysed</label>
        </div>
        {{--<div class="input-field col s6">--}}
            {{--<input id="repo_reviewed" name = "repo_reviewed" type="text" class="validate">--}}
            {{--<label for="repo_reviewed">repo_reviewed</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s6">--}}
            {{--<input id="code_comment" name = "code_comment" type="text" class="validate">--}}
            {{--<label for="code_comment">code_comment</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s6">--}}
            {{--<input id="readme__file" name = "readme__file" type="text" class="validate">--}}
            {{--<label for="readme__file">readme__file</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s6">--}}
            {{--<input id="no_of_commits" name = "no_of_commits" type="text" class="validate">--}}
            {{--<label for="no_of_commits">no_of_commits</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s6">--}}
            {{--<input id="no_of_contributors" name = "no_of_contributors" type="text" class="validate">--}}
            {{--<label for="no_of_contributors">no_of_contributors</label>--}}
        {{--</div>--}}
        {{--<div class="input-field col s6">--}}
            {{--<input id="code_modularization" name = "code_modularization" type="text" class="validate">--}}
            {{--<label for="code_modularization">code_modularization</label>--}}
        {{--</div>--}}
        <button class = 'btn red' type ='submit'>add</button>
    </form>
</div>
@endsection