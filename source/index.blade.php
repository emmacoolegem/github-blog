---
title: Reviews
---

@extends('_layouts.master')

@section('body')

    <ul class="review-listing">
        @foreach($reviews as $review)
            @if($review->published == true)
                <li>
                    <a href="{{ $review->getUrl() }}">
                        <h3 class="review-title">{{ $review->title }}</h3>
                        <span class="review-date">{{ $review->date }}</span>
                        <span class="review-lead">{{ $review->lead }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>

@endsection
