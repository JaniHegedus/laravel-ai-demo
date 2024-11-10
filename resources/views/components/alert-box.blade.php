<div class="mt-6 p-4 {{ $bgColor }} border {{ $borderColor }} rounded-lg">
    <h2 class="text-xl font-semibold {{ $textColor }} mb-2">{{ $title }}</h2>
    <p class="text-gray-700 dark:text-gray-400">{{ $error ?? $insight ?? $defaultMessage }}</p>
</div>
