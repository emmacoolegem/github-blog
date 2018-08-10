---
title: Genres
---

@extends('_layouts.master')

@section('body')

    @if(count($genres) > 0)
        <ul class="review-listing">
            @foreach($genres as $genre)
                <li>
                    <a href="{{ $genre->getUrl() }}">
                        <h3 class="review-title">{{ $genre->title }}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No genres yet</p>
    @endif

@endsection
