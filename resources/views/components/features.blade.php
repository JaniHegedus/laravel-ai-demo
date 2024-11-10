<div x-data="{
    currentSet: 0,
    maxDisplayed: {{ $maxDisplayed }},
    features: {{ json_encode($features) }},
    direction: 'right', // Default direction
    interval: null,
    sliding: false,
    nextSet() {
        this.direction = 'right';
        this.changeSet();
    },
    prevSet() {
        this.direction = 'left';
        this.changeSet();
    },
    changeSet() {
        this.sliding = true;
        setTimeout(() => {
            if (this.direction === 'right') {
                this.currentSet = (this.currentSet + 1) * this.maxDisplayed >= this.features.length ? 0 : this.currentSet + 1;
            } else {
                this.currentSet = this.currentSet === 0 ? Math.floor((this.features.length - 1) / this.maxDisplayed) : this.currentSet - 1;
            }
            this.sliding = false;
        }, 500); // Slide duration
        this.resetInterval();
    },
    resetInterval() {
        clearInterval(this.interval);
        this.interval = setInterval(() => this.nextSet(), 5000);
    }
}" x-init="interval = setInterval(() => nextSet(), 5000)" class="relative flex items-center justify-center overflow-hidden w-full">

    <!-- Left Arrow for Manual Navigation -->
    <button @click="prevSet" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-gray-200 dark:bg-gray-700 p-2 rounded-full hover:bg-gray-300 dark:hover:bg-gray-600">
        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
            <path d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- Features Sliding Container -->
    <div class="w-full overflow-hidden relative">
        <div class="flex transition-transform duration-500"
             :class="{
                 '-translate-x-full': direction === 'right' && sliding,  // Slide out to the left when going right
                 'translate-x-full': direction === 'left' && sliding,    // Slide out to the right when going left
                 'translate-x-0': !sliding                               // Reset to center
             }">
            <template x-for="feature in features.slice(currentSet * maxDisplayed, (currentSet + 1) * maxDisplayed)" :key="feature.title">
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-lg text-center w-full">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200" x-text="feature.title"></h3>
                    <p class="mt-4 text-gray-600 dark:text-gray-400" x-text="feature.description"></p>
                </div>
            </template>
        </div>
    </div>

    <!-- Right Arrow for Manual Navigation -->
    <button @click="nextSet" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-gray-200 dark:bg-gray-700 p-2 rounded-full hover:bg-gray-300 dark:hover:bg-gray-600">
        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
            <path d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>
