@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-3">
                <img class="rounded-circle" style="max-height:150px" src="/svg/rndm.jpg" alt="">
            </div>
            <div class="col-9 pt-3">
                <div>
                    <h1>{{ $user->username }}</h1>
                </div>
                <div class="d-flex">
                    <div class="p-1"><strong>153</strong> posts</div>
                    <div class="p-1"><strong>23k</strong> followers</div>
                    <div class="p-1"><strong>212</strong> following</div>
                </div>
                <div class="pt-2"> <strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="www.google.com">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100" style="max-height:350px " src="/svg/1.jpeg" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" style="max-height:350px " src="/svg/2.jpg" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" style="max-height:350px " src="/svg/3.jpg" alt="">

            </div>
        </div>

    </div>
@endsection
