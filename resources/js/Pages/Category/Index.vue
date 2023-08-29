<script setup lang="ts" >
import BaseLayout from '@/Layouts/BaseLayout.vue'

defineProps<{
    name: string,
    luckyNumber: number
}>()

</script>


<template>
    <BaseLayout>
        <h1>{{ name }}</h1>
        <h2>{{ luckyNumber }}</h2>
    </BaseLayout>
</template>
