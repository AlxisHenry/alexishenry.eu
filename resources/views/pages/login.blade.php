@extends('layouts.app')

@section('content')
    <section id="__LoginSection" class="layout-hero">
        @include('sections.login')
    </section>
@endsection

@section('footer')
    @vite('resources/js/pages/login.js')
@endsection
