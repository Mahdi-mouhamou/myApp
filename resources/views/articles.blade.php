@extends('voyager::master')
@section('content')
<h3>mahdi articles</h3>

  {{ $cmt }}
    @if($posts->count()>0)
        @foreach($posts as $post)
        <h4> <a href="{{ route('sh',['id'=>$post->id]) }}">{{ $post->Post }}</a></h4>
        @endforeach
    @else
      <span>aucun post en base de donnes </span>
    @endif
@endsection