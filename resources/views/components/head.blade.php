<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Application' }}</title>

    {{-- Include CSS files --}}
    @vite('resources/css/app.css')

    {{-- Additional Styles --}}
    {{ $styles ?? '' }}

    <!-- Alpine.js for toggling dark mode -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- Additional Scripts --}}
    {{ $scripts ?? '' }}
</head>
