@extends('_layouts.master')

@section('body')
    <article class="review">
        <header class="review-header">
            <h2 class="review-title">{{ $page->title }}</h2>
        </header>

        @yield('content')

        <hr>

        <ul class="review-listing">
            @foreach($reviews as $review)
                @if($review->published == true && $review->genre == strtolower($page->title))
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
    </article>
@endsection