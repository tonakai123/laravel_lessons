@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>
  New Post
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <input type="text" name="makoto" placeholder="enter URL" value="{{ old('makoto') }}">
    @if ($errors->has('makoto'))
    <span class="error">{{ $errors->first('makoto') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
<a href="{{ url('/') }}" class="header-menu">Back</a>
@endsection