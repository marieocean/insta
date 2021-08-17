@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img style="width: 200px;padding-top: 15px;" src="/img/freecodecamp.png">
        </div>
        <div class="col-md-9" style="padding-left: 20px">
            <div class="col-md-3">
                <h1 >{{$user->username }}</h1>
            </div>
            <div class="col-md-6">
                <a class="btn btn-primary" style="margin-top: 25px;" href="#">Add a new post</a>
            </div>
        </div>
        <div class="col-md-9" style="padding-left: 20px">
            <div class="row" style="margin-left:0px!important">
                <div class="col-md-3" style="padding-left: 0px!important"><strong>396</strong> posts</div>
                <div class="col-md-3"><strong>77.5 k</strong> followers</div>
                <div class="col-md-3"><strong>315</strong> following</div>
            </div>
            <div>
                <strong>{{$user->profile->title }}</strong>
            </div>
            <div>
                {{$user->profile->description }} </div>
            <div>
                <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.freecodecamp.org%2F&amp;e=ATPuvwEBWqPVB8otl53sE3UFiKePBkm9Nm2GInfP86UBGvmD9nazkO282cGnERReglYIEHXjagG_PCL5&amp;s=1" page_id="profilePage" rel="me nofollow noopener noreferrer" target="_blank">{{$user->profile->url }}</a>
            </div>

        </div>
    </div>
    <div class="row" style="padding-top : 30px">
        <div class="col-md-4">
            <img style="width: 100%" src="/img/image1.jpeg">
        </div>
        <div class="col-md-4">
            <img style="width: 100%" src="/img/image2.jpeg">
        </div>
        <div class="col-md-4">
            <img style="width: 100%" src="/img/image3.jpeg">
        </div>
    </div>
</div>
@endsection
