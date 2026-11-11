<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>@yield('title', 'Della Keyz | Developer Portfolio')</title>

    <script>
    (function () {
        const savedTheme = localStorage.getItem('della-theme');

        const preferredTheme =
            window.matchMedia('(prefers-color-scheme: dark)').matches
                ? 'dark'
                : 'light';

        document.documentElement.setAttribute(
            'data-theme',
            savedTheme || preferredTheme
        );
    })();
</script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>