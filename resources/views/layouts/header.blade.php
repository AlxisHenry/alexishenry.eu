<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Libre+Franklin:wght@200&family=Poppins:wght@200&display=swap"
        rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords"
        content="powershell,bash,linux,sysadmin,devops,symfony,freelance,github,geek,windows,veille technologique,veille juridique,technologie,juridique,scrapping,laravel 8,grafikart,mangaflix,learn dev,portfolio,web,developer,laravel,php,python,html,css,webdeveloper,bts,sio,services,informatique,organisations,strasbourg,france,modern,fiver,profesional,henry,alexis,network,system,reseau,systeme,portfolio bts,bts-sio portfolio,cci campus bts sio,cci campus strasbourg,cci campus,full stack,front end,back end,javascript,Alexis Henry,Alexis,Henry" />
    <meta name="googlebot" content="index,follow,nosnippet" />
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="© {{ date('Y') }} Alexis Henry. All Rights Reserved." />
    <meta property="og:type" content="portfolio" />
    <meta property="og:title" content="{{ $title ?? $exception->getStatusCode() }}" />
    <meta property="og:image" content="{{ url('assets/icons/favicon-16x16.ico') }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="alexishenry.eu">
    <meta property="og:locale" content="en_EN">
    <meta property="og:locale:alternate" content="fr_FR">
    <meta name="description" content="Je suis un développeur web junior situé à Strasbourg, spécialisée dans le développement d'applications web et mobiles. Je réalise un Master au sein d'Epitech." />
    <title>{{ $title ?? $exception->getStatusCode() }}&nbsp;- HENRY Alexis</title>
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="mask-icon" href="{{ url('assets/icons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="180x180" href="{{ url('assets/icons/mstile-150x150.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/icons/apple-touch-icon-180x180.png') }}">
    <meta name="msapplication-config" content="{{ url('assets/icons/browserconfig.xml') }}">
    <link rel="manifest" href="{{ url('assets/icons/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://analytics.alexishenry.eu/sync.js" data-id="1"></script>
    <script type="text/javascript">
        window.addEventListener("load", () => {
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register('/sw.js')
            }
        })
    </script>
</head>
