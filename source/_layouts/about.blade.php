@extends('_layouts.master')

@section('body')
    <article class="about">
        <header class="about-header">
            <img src="{{ mix('img/me.jpg', 'assets/build') }}" alt="Emma Coolegem">
            <h2>About me</h2>
        </header>

        @yield('content')

        <hr>
    </article>
@endsection