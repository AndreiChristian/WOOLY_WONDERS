<script setup lang="ts" >
import BaseLayout from '@/Layouts/BaseLayout.vue'
import CardThree from '@/Components/Cards/CardThree.vue'
import Header from '@/Components/Shared/Header.vue'
import { onMounted } from 'vue';

interface Category {
    id: number,
    name: string,
    created_at: string,
    updated_at: string,
}
const { categories } = defineProps<{
    categories: Category[]
}>()

onMounted(() => {
    console.table(categories)
})


</script>


<template>
    <BaseLayout>
        <Header title="Categories"></Header>
        <div
            class="grid grid-cols-1 max-w-2xl mx-auto gap-6 my-12 [&>*:nth-child(3)]:bg-red-400 [&>*:nth-child(1)]:bg-yellow-400 [&>*:nth-child(2)]:bg-violet-300 [&>*:nth-child(4)]:bg-green-400">
            <CardThree v-for="c in categories" :title="c.name" description="Dummy tEXT" href="Hello"></CardThree>
        </div>
    </BaseLayout>
</template>
