<div x-data="{ darkMode: @json(session('dark_mode', false)) }">
    <button type="button"
            @click="darkMode = !darkMode; $nextTick(() => $refs.form.submit())"
            class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">

        <span x-show="!darkMode">🌙 Dark Mode</span>
        <span x-show="darkMode">☀️ Light Mode</span>
    </button>

    <form x-ref="form" action="{{ route('toggle.dark.mode') }}" method="POST" class="hidden">
        @csrf
        <input type="hidden" name="dark_mode" :value="darkMode">
    </form>
</div>
