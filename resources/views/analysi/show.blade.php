@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show analysi
    </h1>
    <br>
    <form method = 'get' action = '{!!url("analysi")!!}'>
        <button class = 'btn btn-primary'>analysi Index</button>
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
                    <b><i>first_name : </i></b>
                </td>
                <td>{!!$analysi->first_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>second_name : </i></b>
                </td>
                <td>{!!$analysi->second_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email_add : </i></b>
                </td>
                <td>{!!$analysi->email_add!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>github_url : </i></b>
                </td>
                <td>{!!$analysi->github_url!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>repo_reviewed : </i></b>
                </td>
                <td>{!!$analysi->repo_reviewed!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>code_comment : </i></b>
                </td>
                <td>{!!$analysi->code_comment!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>readme__file : </i></b>
                </td>
                <td>{!!$analysi->readme__file!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>no_of_commits : </i></b>
                </td>
                <td>{!!$analysi->no_of_commits!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>no_of_contributors : </i></b>
                </td>
                <td>{!!$analysi->no_of_contributors!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>code_modularization : </i></b>
                </td>
                <td>{!!$analysi->code_modularization!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection