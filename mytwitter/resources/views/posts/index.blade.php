@extends('layouts.default')

@section('title', 'koresawa portfolio')

@section('content')
<h1>
  おすすめ動画
</h1>
<ul>
<div class="movie-wrap">
<iframe width="560" height="315" src="https://www.youtube.com/embed/PgAzHovs_fU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  @forelse ($posts as $post)
  <li>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[編集]</a>
    <a href="#" class="del" data-id="{{ $post->id }}">[削除]</a>
    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <li>No posts yet</li>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection
