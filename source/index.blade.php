---
title: Reviews
---

@extends('_layouts.master')

@section('body')

    
    @if(count($reviews) > 0)
        <ul class="review-listing">
            @foreach($reviews as $review)
                <li>
                    <a href="{{ $review->getUrl() }}">
                        <h3 class="review-title">{{ $review->title }}</h3>
                        <span class="review-date">{{ $review->date }}</span>
                        <span class="review-lead">{{ $review->lead }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No reviews yet</p>
    @endif

@endsection
