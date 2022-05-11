@include('__header__')
@include('__navbar__clean__')

<section class="__spoiler__cards__ __keywords__cards__">

    <div class="__research__">Keyword : {{ $KEYWORD }}</div>

    <div class="__cards__">

        @foreach($CORRESPONDING_KEYWORD_ARTICLE as $card)

                <div class="__article__card__ __article__nb__{{ $card->identifier }}__ ">

                    <div class="__article__image__">
                        <img src="{{ $card->LinkImage }}" alt="{{ $Google->translate(str($card->AltImage)) }}" title="{{ $Google->translate($card->title) }}">
                    </div>

                    <div class="__article__date__">
                        <time data-time="{{ date($card->UploadDate) }}"> Published on {{ date('d/m/Y', strtotime(date($card->UploadDate)))  }}</time>
                    </div>

                    <div class="__article__title__">
                        <span>{{ $Google->translate($card->title) }}</span>
                    </div>

                    <div class="__article_url__">
                        <a href="/news/{{ substr($card->UrlArticle, strrpos($card->UrlArticle, '/', '0') + 1) }}">
                            <button>{{ $Google->translate("Voir l'article") }}</button>
                        </a>
                    </div>

                </div>

            @endforeach

    </div>

</section>

@include('__footer__')