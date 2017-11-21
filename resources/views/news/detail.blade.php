@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <div style="border: 1px solid #d7d7d7; padding: 10px">
                <h2>{{ $news->title }}</h2>
                <div class=""><p>{{ $news->user->name }} {{ $news->created_at }}</p></div>
                <hr>
                <p>{!! $news->content !!}</p>
                <hr>
                <div class=""><p><b>Attack: </b><a href="{{ route('download_attach', [urlencode($news->attach_name), $news->attach]) }}">{{ $news->attach_name }}</a></p></div>
            </div>
        </div>
    </div>
@endsection
@section('script') 
    
@endsection