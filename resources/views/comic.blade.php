@extends('layouts.main')
@section('title', $comic['title'])
@section('main-content')
    <section id="single-comic">
        <div class="large-jumbo">
            <figure class="figure-comic">
                <div class="comic-label label-top">
                    comic book
                </div>
                <div class="comic-label label-down">
                    view gallery
                </div>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </figure>
        </div>
    </section>
@endsection
