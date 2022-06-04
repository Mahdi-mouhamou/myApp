@extends('voyager::master')

@section('content')
    <h1>article</h1>
    
    {{-- <h2>{{ $post->Post }}</h2> --}}

    

    @foreach ($post->comment as $comment)
         <h1>{{ $comment->Title }}</h1>  
    @endforeach
    

 
 
@endsection






