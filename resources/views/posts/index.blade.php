@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach($posts as $post)
        <div class="col-4 pb-4">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
            <div>{{$post->caption}}</div>
        </div>
        @endforeach

        <div class="row">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection