@extends('layouts.master')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <h1>{{ $post->tenVietHoa() }}</h1>
    <ul>
        @foreach($post->categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
    <div><b>{!! $post->excerpt !!}</b></div>
    <div>
        {!! $post->content !!}
    </div>

    <div>
        Ngay tao bai {{ $post->created_at->format('d/m/Y') }}
    </div>

    <form action="{{ route('posts.update', 1) }}" method="post">
        <input type="hidden" name="_method" value="put">
        ... form update
    </form>

    <form action="{{ route('posts.update', 1) }}" method="post">
        <input type="hidden" name="_method" value="delete">
        ... delele
        <button type="submit">Delete</button>
    </form>
@endsection
