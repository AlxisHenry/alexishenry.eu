@component('components.underline-title')
    @slot('Title')
        Resources
    @endslot
@endcomponent

<div class="__board__cards__">
    @foreach ($Boards as $Board)
        @include('components.board-cards')
    @endforeach
</div>

@include('components.more', ['to' => '/resources'])
