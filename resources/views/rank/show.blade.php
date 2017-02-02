@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show rank
    </h1>
    <br>
    <form method = 'get' action = '{!!url("rank")!!}'>
        <button class = 'btn btn-primary'>rank Index</button>
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
                <td>{!!$rank->first_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>second_name : </i></b>
                </td>
                <td>{!!$rank->second_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email_address : </i></b>
                </td>
                <td>{!!$rank->email_address!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Organization : </i></b>
                </td>
                <td>{!!$rank->Organization!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>dev_manager : </i></b>
                </td>
                <td>{!!$rank->dev_manager!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>senior_dev : </i></b>
                </td>
                <td>{!!$rank->senior_dev!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>scrum : </i></b>
                </td>
                <td>{!!$rank->scrum!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>devops : </i></b>
                </td>
                <td>{!!$rank->devops!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>architect : </i></b>
                </td>
                <td>{!!$rank->architect!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>product_owner : </i></b>
                </td>
                <td>{!!$rank->product_owner!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>quality_lead : </i></b>
                </td>
                <td>{!!$rank->quality_lead!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tester : </i></b>
                </td>
                <td>{!!$rank->tester!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>junior_dev : </i></b>
                </td>
                <td>{!!$rank->junior_dev!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection