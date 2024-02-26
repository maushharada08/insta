@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <h1>Edit Profile</h1>
        </div>

        <div class="row mb-3">
            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

            <div class="col-md-6">
                <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="description" class="col-md-4 col-form-label text-md-end">description</label>

            <div class="col-md-6">
                <input id="description" type="text" name="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="url" class="col-md-4 col-form-label text-md-end">URL</label>

            <div class="col-md-6">
                <input id="url" type="text" name="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">Post image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @error('image')
                
                    <strong>{{ $message }}</strong>
    
            @enderror
        </div>

        <div class="row mb-3">
            <button class="btn btn-primary">Save Profile</button>
        </div>
    </form>
</div>
@endsection
