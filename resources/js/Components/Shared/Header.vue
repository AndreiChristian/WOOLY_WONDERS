<script setup lang="ts">

const props = defineProps<{
    title: String
}>()

const { title = 'PlaceHolder' } = props

</script>

<template>
    <section class="2xl:max-w-7xl mx-auto">
        <div class="mx-auto bg-lila-500 border-y-2 border-black">
            <div class="text-center p-8 lg:p-20 2xl:px-0">
                <h1 class="text-4xl" >{{title}}</h1>
            </div>
        </div>
    </section>
</template>
