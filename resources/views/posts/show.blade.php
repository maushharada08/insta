@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100 ">

        </div>
        <div class="col-4">
            <div class="d-flex" style="align-items:center;">
                <img src="{{$post->user->profile->profileImage() }}" class="rounded-circle pr-3 me-2" style="max-width:30px; ">
                <a href="/profile/{{ $post->user->id }}"><h3 class="pl-2 me-2"><strong>{{ $post->user->username }}</strong></h3></a>
                ・
                <a href="">follow</a>
            </div>
            <div class="d-flex pt-3" style="align-items:center;">
                <p class="">
                    <a href="/profile/{{ $post->user->id }}" class="">
                        <h4 class="pe-2"><strong>{{ $post->user->username }}</strong></h4>
                    </a>
                        {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    
</div>
@endsection
