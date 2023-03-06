@extends('layouts.app')

@section('content')
    <section id="__board" class="__main__board__ layout-maxed">
        @component('components.underline-title')
            @slot('title')
                Resources
            @endslot
        @endcomponent
        <div class="section-explication">
            On this page are available all the documentations I made during my BTS. Click on the download button to get them
            in pdf format.
        </div>
        <div class="__main__board__cards__">
            @foreach ($resources as $resource)
                @include('components.resource')
            @endforeach
        </div>
    </section>
@endsection

@section('footer')
    @vite('resources/js/pages/board.js')
    @vite('resources/js/pages/projects.js')
@stop