@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')


    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-circle" src="https://avatars0.githubusercontent.com/u/1670007?v=3&u=6ba2d4902943950a21248688ac958a3b11ea9979&s=400" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Code Repo + Portfolio</a></li>
              <li><a href="#timeline" data-toggle="tab">Essay + Twitter</a></li>
              <li><a href="#settings" data-toggle="tab">Linkedln + CV</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
      <div class="row">

             <div class="col-md-6">
               <div class="box">
                 <div class="box-header with-border">
                   <h3 class="box-title">Bordered Table</h3>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                   <table class="table table-bordered">
                     <tr>
                       <th style="width: 10px">#</th>
                       <th>Task</th>
                       <th>Progress</th>
                       <th style="width: 40px">Label</th>
                     </tr>
                     <tr>
                       <td>1.</td>
                       <td>Update software</td>
                       <td>
                         <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-red">55%</span></td>
                     </tr>
                     <tr>
                       <td>2.</td>
                       <td>Clean database</td>
                       <td>
                         <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-yellow">70%</span></td>
                     </tr>
                     <tr>
                       <td>3.</td>
                       <td>Cron job running</td>
                       <td>
                         <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-light-blue">30%</span></td>
                     </tr>
                     <tr>
                       <td>4.</td>
                       <td>Fix and squish bugs</td>
                       <td>
                         <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-green">90%</span></td>
                     </tr>
                   </table>
                 </div>
                 <!-- /.box-body -->
                 <div class="box-footer clearfix">
                   <ul class="pagination pagination-sm no-margin pull-right">
                     <li><a href="#">&laquo;</a></li>
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">&raquo;</a></li>
                   </ul>
                 </div>
               </div>
               <!-- /.box -->
               <!-- /.box -->
             </div>
             <div class="col-md-6">


                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
          <!-- /.box -->

               <!-- /.box -->
             </div>
             <!-- /.col -->
             <!-- /.col -->
           </div>
           <!-- /.row -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
            <div class="row">
             <div class="col-md-6">


                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
          <!-- /.box -->

               <!-- /.box -->
             </div>
             </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
            <div class="row">
              <div class="col-md-6">
               <div class="box">
                 <div class="box-header with-border">
                   <h3 class="box-title">Bordered Table</h3>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                   <table class="table table-bordered">
                     <tr>
                       <th style="width: 10px">#</th>
                       <th>Task</th>
                       <th>Progress</th>
                       <th style="width: 40px">Label</th>
                     </tr>
                     <tr>
                       <td>1.</td>
                       <td>Update software</td>
                       <td>
                         <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-red">55%</span></td>
                     </tr>
                     <tr>
                       <td>2.</td>
                       <td>Clean database</td>
                       <td>
                         <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-yellow">70%</span></td>
                     </tr>
                     <tr>
                       <td>3.</td>
                       <td>Cron job running</td>
                       <td>
                         <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-light-blue">30%</span></td>
                     </tr>
                     <tr>
                       <td>4.</td>
                       <td>Fix and squish bugs</td>
                       <td>
                         <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-green">90%</span></td>
                     </tr>
                   </table>
                 </div>
                 <!-- /.box-body -->
                 <div class="box-footer clearfix">
                   <ul class="pagination pagination-sm no-margin pull-right">
                     <li><a href="#">&laquo;</a></li>
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">&raquo;</a></li>
                   </ul>
                 </div>
               </div>
               <!-- /.box -->
               <!-- /.box -->
             </div>
             </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>


{{--<section class="content">--}}
    {{--<h1>--}}
        {{--Show analysis_request--}}
    {{--</h1>--}}
    {{--<br>--}}
    {{--<form method = 'get' action = '{!!url("analysis_request")!!}'>--}}
        {{--<button class = 'btn btn-primary'>analysis_request Index</button>--}}
    {{--</form>--}}
    {{--<br>--}}
    {{--<table class = 'table table-bordered'>--}}
        {{--<thead>--}}
            {{--<th>Key</th>--}}
            {{--<th>Value</th>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>user_id : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->user_id!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>primary_email : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->primary_email!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>code_repo : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->code_repo!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>job_type : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->job_type!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>other_details : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->other_details!!}</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td>--}}
                    {{--<b><i>status : </i></b>--}}
                {{--</td>--}}
                {{--<td>{!!$analysis_request->status!!}</td>--}}
            {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--</section>--}}
@endsection

@section('scripts')
<script>
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>
@endsection