@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row mb-3">
            <h1>Add new Post</h1>
        </div>

        <div class="row mb-3">
            <label for="caption" class="col-md-4 col-form-label text-md-end">Post caption</label>

            <div class="col-md-6">
                <input id="caption" type="text" name="caption" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                @error('caption')
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
            <button class="btn btn-primary">Add new Post</button>
        </div>
    </form>
    
</div>
@endsection
