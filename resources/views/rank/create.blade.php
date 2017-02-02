@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create rank
    </h1>
    <form method = 'get' action = '{!!url("rank")!!}'>
        <button class = 'btn btn-danger'>rank Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("rank")!!}'>
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
            <label for="email_address">email_address</label>
            <input id="email_address" name = "email_address" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Organization">Organization</label>
            <input id="Organization" name = "Organization" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="dev_manager">dev_manager</label>
            <input id="dev_manager" name = "dev_manager" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="senior_dev">senior_dev</label>
            <input id="senior_dev" name = "senior_dev" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="scrum">scrum</label>
            <input id="scrum" name = "scrum" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="devops">devops</label>
            <input id="devops" name = "devops" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="architect">architect</label>
            <input id="architect" name = "architect" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="product_owner">product_owner</label>
            <input id="product_owner" name = "product_owner" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="quality_lead">quality_lead</label>
            <input id="quality_lead" name = "quality_lead" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tester">tester</label>
            <input id="tester" name = "tester" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="junior_dev">junior_dev</label>
            <input id="junior_dev" name = "junior_dev" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection