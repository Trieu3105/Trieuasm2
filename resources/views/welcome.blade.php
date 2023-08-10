
<form action="{{ route('image.welcome') }}" method="POST" enctype="multipart/form-data">
   @csrf
   <input type="file" name="images">
   <input type="text" name="caption" placeholder="Caption">
   <button type="submit">Upload Image</button>
</form>
@extends('layouts.app')

@section('content')
    <h1>Images</h1>

    <a href="{{ route('images.create') }}" class="btn btn-primary">Upload New Image</a>

    <div class="mt-3">
        <ul class="list-group">
            @foreach($images as $image)
                <li class="list-group-item">
                    <img src="{{ asset($image->path) }}" alt="{{ $image->caption }}" class="img-thumbnail">
                    <h4>{{ $image->caption }}</h4>
                </li>
            @endforeach
        </ul>
    </div>
@endsection