@extends('layouts.app')

@section('content')
    <section id="__ContactForm" class="section __contact__form__" style="margin-top: 0;">
        @component('components.underline-title')
            @slot('title')
                {{ __('titles.contact') }}
            @endslot
        @endcomponent
        @include('components.contact-form')
    </section>
@endsection
