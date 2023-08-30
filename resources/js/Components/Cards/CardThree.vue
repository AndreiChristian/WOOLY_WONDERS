<script setup lang="ts">

defineProps<{
    title: string,
    description: string,
    href: string,
}>()

</script>

<template>
    <a href={{url}} title={{title}}>
        <div
            class="flex flex-col h-full overflow-hidden shadow-large border-2 divide-y-2 divide-black border-black hover:shadow-none duration-200">
            <div class="flex flex-1 flex-col justify-between p-6">
                <div class="flex-1">
                    <div class="mt-2 block">
                        <p class="text-xl lg:text-3xl text-black">
                        {{title}}
                        </p>
                        <p class="mt-3 text-xl text-black">
                        {{description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</template>
