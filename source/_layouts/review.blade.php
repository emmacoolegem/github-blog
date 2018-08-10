@extends('_layouts.master')

@section('body')
    <article class="review">
        <header class="review-header">
            <h2 class="review-title">{{ $page->title }}</h2>
            <span class="review-date">{{ $page->date }}</span>
            <span class="review-rating">
                <stars rating="{{ $page->rating }}"></stars>
            </span>
        </header>

        @yield('content')
    </article>
@endsection