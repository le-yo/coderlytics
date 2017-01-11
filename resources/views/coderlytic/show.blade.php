@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show coderlytic
    </h1>
    <form method = 'get' action = '{!!url("coderlytic")!!}'>
        <button class = 'btn blue'>coderlytic Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>first_name : </i></b>
                </td>
                <td>{!!$coderlytic->first_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>second_name : </i></b>
                </td>
                <td>{!!$coderlytic->second_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email_add : </i></b>
                </td>
                <td>{!!$coderlytic->email_add!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>github_url : </i></b>
                </td>
                <td>{!!$coderlytic->github_url!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>repo_reviewed : </i></b>
                </td>
                <td>{!!$coderlytic->repo_reviewed!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>code_comment : </i></b>
                </td>
                <td>{!!$coderlytic->code_comment!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>readme__file : </i></b>
                </td>
                <td>{!!$coderlytic->readme__file!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>no_of_commits : </i></b>
                </td>
                <td>{!!$coderlytic->no_of_commits!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>no_of_contributors : </i></b>
                </td>
                <td>{!!$coderlytic->no_of_contributors!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>code_modularization : </i></b>
                </td>
                <td>{!!$coderlytic->code_modularization!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection