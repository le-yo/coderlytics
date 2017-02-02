@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Rank Index
    </h1>
    <div style="overflow-x: scroll;">
    <form class = 'col s3' method = 'get' action = '{!!url("rank")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New rank</button>
    </form>
    <br>
    <br>
    <table id="example1" class ="table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Email Address</th>
            <th>Organization</th>
            <th>Dev manager</th>
            <th>Senior Dev</th>
            <th>Scrum</th>
            <th>Devops</th>
            <th>Architect</th>
            <th>Product Owner</th>
            <th>Quality Lead</th>
            <th>Tester</th>
            <th>Junior_dev</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($ranks as $rank) 
            <tr>
                <td>{!!$rank->first_name!!}</td>
                <td>{!!$rank->second_name!!}</td>
                <td>{!!$rank->email_address!!}</td>
                <td>{!!$rank->Organization!!}</td>
                <td>{!!$rank->dev_manager!!}</td>
                <td>{!!$rank->senior_dev!!}</td>
                <td>{!!$rank->scrum!!}</td>
                <td>{!!$rank->devops!!}</td>
                <td>{!!$rank->architect!!}</td>
                <td>{!!$rank->product_owner!!}</td>
                <td>{!!$rank->quality_lead!!}</td>
                <td>{!!$rank->tester!!}</td>
                <td>{!!$rank->junior_dev!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/rank/{!!$rank->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/rank/{!!$rank->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/rank/{!!$rank->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {{--{!! $ranks->render() !!}--}}
    </div>
</section>
@endsection

@section('scripts')
<script>
  $(function () {
    $("#example1").DataTable();
//    $('#example2').DataTable({
//      "paging": true,
//      "lengthChange": false,
//      "searching": false,
//      "ordering": true,
//      "info": true,
//      "autoWidth": false
//    });
  });
</script>
@endsection