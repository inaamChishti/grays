<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Grays Exam Centre | Private Exam & Tuition Centre')</title>
    <meta name="description" content="@yield('meta_description', 'Grays Exam Centre is a modern, JCQ-compliant private exam and tuition centre in Grays, Essex. GCSE, IGCSE, A-Level, university entrance exams and expert tuition under one roof.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="sitemap" type="application/xml" href="{{ route('sitemap.xml') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Grays Exam Centre">
    <meta property="og:title" content="@yield('title', 'Grays Exam Centre | Private Exam & Tuition Centre')">
    <meta property="og:description" content="@yield('meta_description', 'Grays Exam Centre is a modern, JCQ-compliant private exam and tuition centre in Grays, Essex.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="en_GB">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}?v=1.4">
    <script>document.documentElement.classList.add('js');</script>
    @stack('head')
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    @include('partials.header')

    <main id="main">
        @yield('content')
    </main>

    @unless (request()->routeIs('home', 'contact.us', 'form', 'sitemap'))
        @include('partials.exam-boards')
    @endunless

    @include('partials.footer')
    @include('partials.flash')

    <script src="{{ asset('js/site.js') }}?v=1.1" defer></script>
    @stack('scripts')
</body>
</html>
