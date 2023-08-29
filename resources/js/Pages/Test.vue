<script setup lang="ts" >
import { Head } from "@inertiajs/vue3";
import BaseLayout from '@/Layouts/BaseLayout.vue'

import { ref } from "vue";

const count = ref(0);

const increment = () => {
    count.value++
}

const decrement = () => {
    count.value--
}

</script>

<template>
    <Head title="Test" />
    <BaseLayout>
        <div class="box-border m-20 flex items-center justify-evenly">
            <button @click="decrement"
                class="items-center w-1/5 border-black flex border-2 bg-black focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 font-medium hover:bg-red-500 hover:text-black justify-center px-5 py-3 rounded-xl text-base text-white">Decrement</button>
            <span class="text-2xl">{{ count }}</span>
            <button @click="increment"
                class="items-center w-1/5 border-black flex border-2 bg-black focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 font-medium hover:bg-blue-500 hover:text-black justify-center px-5 py-3 rounded-xl text-base text-white">Increment</button>
        </div>
    </BaseLayout>
</template>
