@extends('layouts.main')
@section('title', $comic['title'])
@section('main-content')
    <section id="single-comic">
        <div class="large-jumbo">
            <figure class="figure-comic">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </figure>
        </div>
    </section>
@endsection
