@extends('_layouts.master')

@section('body')
    <article class="review">
        <header class="review-header">
            <h2 class="review-title">{{ $page->title }}</h2>
        </header>

        @yield('content')

        <hr>

        @if (count($page->genreReviews($page, $page->publishedReviews($reviews))) > 0)
            <ul class="review-listing">
                @foreach(($page->genreReviews($page, $page->publishedReviews($reviews))) as $review)
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
            <p>No reviews yet with the {{ strtolower($page->title) }} genre</p>
        @endif
    </article>
@endsection