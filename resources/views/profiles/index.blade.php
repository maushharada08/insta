@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-3">
        <div class="col-4 p-3">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100 h-75">
        </div>
        <div class="col-8 p-3">
            <div class="d-flex">
                <h2 class="pe-2">{{ $user->username }}</h1>
                <form action="/follow/{{ $user->id }}" enctype="multipart/form-data" method="post">
                    <button class="btn btn-primary">Follow</button>
                </form>
            </div>
       

            @can('update', $user->profile)
            <div class="div">
                <a href="/p/create">Add new Post</a>
            </div>
            @endcan
           
            @can('update', $user->profile)
            <div class="div">
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            </div>
            @endcan
           
            <div class="d-flex">
                <div class="pe-2"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pe-2"><strong>23K</strong> followers</div>
                <div class="pe-2"><strong>212</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <a href="">{{ $user->profile->url}}</a>
        </div>
    </div>
    <div class="row pt-3 ">
        @foreach($user->posts as $post)
        <div class="col-4 pb-3">
            <a href="/p/{{ $post->id }}">
              <img src="/storage/{{ $post->image }}" class="w-100" style="height:300px; object-fit: cover;">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
