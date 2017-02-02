@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit rank
    </h1>
    <form method = 'get' action = '{!!url("rank")!!}'>
        <button class = 'btn btn-danger'>rank Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("rank")!!}/{!!$rank->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="first_name">first_name</label>
            <input id="first_name" name = "first_name" type="text" class="form-control" value="{!!$rank->
            first_name!!}"> 
        </div>
        <div class="form-group">
            <label for="second_name">second_name</label>
            <input id="second_name" name = "second_name" type="text" class="form-control" value="{!!$rank->
            second_name!!}"> 
        </div>
        <div class="form-group">
            <label for="email_address">email_address</label>
            <input id="email_address" name = "email_address" type="text" class="form-control" value="{!!$rank->
            email_address!!}"> 
        </div>
        <div class="form-group">
            <label for="Organization">Organization</label>
            <input id="Organization" name = "Organization" type="text" class="form-control" value="{!!$rank->
            Organization!!}"> 
        </div>
        <div class="form-group">
            <label for="dev_manager">dev_manager</label>
            <input id="dev_manager" name = "dev_manager" type="text" class="form-control" value="{!!$rank->
            dev_manager!!}"> 
        </div>
        <div class="form-group">
            <label for="senior_dev">senior_dev</label>
            <input id="senior_dev" name = "senior_dev" type="text" class="form-control" value="{!!$rank->
            senior_dev!!}"> 
        </div>
        <div class="form-group">
            <label for="scrum">scrum</label>
            <input id="scrum" name = "scrum" type="text" class="form-control" value="{!!$rank->
            scrum!!}"> 
        </div>
        <div class="form-group">
            <label for="devops">devops</label>
            <input id="devops" name = "devops" type="text" class="form-control" value="{!!$rank->
            devops!!}"> 
        </div>
        <div class="form-group">
            <label for="architect">architect</label>
            <input id="architect" name = "architect" type="text" class="form-control" value="{!!$rank->
            architect!!}"> 
        </div>
        <div class="form-group">
            <label for="product_owner">product_owner</label>
            <input id="product_owner" name = "product_owner" type="text" class="form-control" value="{!!$rank->
            product_owner!!}"> 
        </div>
        <div class="form-group">
            <label for="quality_lead">quality_lead</label>
            <input id="quality_lead" name = "quality_lead" type="text" class="form-control" value="{!!$rank->
            quality_lead!!}"> 
        </div>
        <div class="form-group">
            <label for="tester">tester</label>
            <input id="tester" name = "tester" type="text" class="form-control" value="{!!$rank->
            tester!!}"> 
        </div>
        <div class="form-group">
            <label for="junior_dev">junior_dev</label>
            <input id="junior_dev" name = "junior_dev" type="text" class="form-control" value="{!!$rank->
            junior_dev!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection