@extends('public.layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <article>
                {{ $post->description }}<br/> fe
            </article>
        @endforeach
    </div>
@endsection
