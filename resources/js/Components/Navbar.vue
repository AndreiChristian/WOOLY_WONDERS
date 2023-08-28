<script>
export default {
    data() {
        return {
            open: false,
        };
    },
    methods: {
        toggleOpen() {
            console.log(this.open)
            this.open = !this.open;
        },
    },
};
</script>

<template>
    <div
        class="mx-auto w-full bg-lila-500 2xl:border-2 justify-center sticky top-0 z-20 2xl:max-w-7xl border-y-2 border-black">
        <div
            class="mx-auto w-full flex flex-col lg:flex-row py-6 md:py-0 lg:items-center lg:justify-between 2xl:max-w-7xl px-8 md:px-0">
            <div class="text-black items-center flex justify-between flex-row">
                <a v-if="!open"
                    class="text-black items-center font-bold gap-3 inline-flex text-lg tracking-tighter md:hidden"
                    href="/"><span>FLABBERGASTED.</span></a>
                <button class="focus:outline-none focus:shadow-outline md:hidden ml-auto border-2 border-black bg-red-500"
                    @click="toggleOpen">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path v-if="!open" d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"></path>
                        <path v-else d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col items-center flex-grow hidden md:flex md:flex-row md:justify-start md:mt-0 lg:p-0 py-2 md:py-0 md:px-0 md:pb-0 px-5">
                <a class="text-black text-2xl duration-1000 ease-in-out focus:outline-none focus:shadow-none focus:text-orange/90 hover:text-lila-900 md:my-0 px-4 py-2 transform transition md:ml-8 lg:ml-16 2xl:ml-0"
                    href="/"> Wooly Wonders
                </a>

                <a class="text-black duration-1000 text-lg ease-in-out focus:outline-none focus:shadow-none focus:text-orange/90 hover:text-lila-900 md:my-0 px-4 py-2 transform transition"
                    href="/overview">Overview
                </a>
                <a class="text-black duration-1000 text-lg ease-in-out focus:outline-none focus:shadow-none focus:text-orange/90 hover:text-lila-900 md:my-0 px-4 py-2 transform transition"
                    href="/styleguide">Style Guide
                </a>

                <a class="text-lila-500 md:ml-auto text-lg bg-black border-l-2 border-black duration-500 ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 hover:bg-lila-900 hover:text-lila-500 inline-flex items-center justify-center px-6 text-center transform transition py-2 md:py-8"
                    href="https://lexingtonthemes.lemonsqueezy.com/checkout/buy/645ac44b-ee66-4368-bb58-be869569fb88"><span>Buy
                        Flabbergasted</span>
                </a>
            </nav>
        </div>
    </div>
</template>

