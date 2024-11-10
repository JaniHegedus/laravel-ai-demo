<nav class="bg-blue-500 dark:bg-blue-700 text-white p-4 rounded-lg mb-6">
    <ul class="flex space-x-4">
        @foreach ($routes as $route)
            <li>
                <a href="{{ url($route['uri']) }}" class="hover:text-blue-300 dark:hover:text-blue-400">
                    {{ ucfirst(str_replace('.', ' ', $route['name'])) }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
