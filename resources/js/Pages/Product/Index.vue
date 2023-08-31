<script setup lang="ts">
import BaseLayout from '@/Layouts/BaseLayout.vue'
import Header from '@/Components/Shared/Header.vue'

interface Category {
    id: number,
    name: string,
    created_at: string,
    updated_at: string,
}

const { categories } = defineProps<{
    categories: Category[]
}>()


</script>

<template>
    <BaseLayout>
        <section>
            <Header :title="'Products'"></Header>
            <div class="relative items-center w-full mx-auto 2xl:max-w-7xl p-8 lg:p-20 2xl:px-0">
                <ol role="list" class="divide-y-2 mt-16 flex flex-wrap gap-3 mx-auto justify-center">
                    <li v-for="c of categories" aria-label="Strokes and fills on page 21">
                        <span
                            class="text-black items-center shadow-[5px_5px_black] inline-flex px-6 focus:outline-none justify-center text-center bg-white border-black ease-in-out hover:text-white transform transition hover:shadow-none border-2 duration-200 hover:bg-black lg:w-auto py-3 rounded-xl w-full">
                            <a href="">{{ c.name }}</a>
                        </span>
                    </li>
                </ol>
            </div>
        </section>
    </BaseLayout>
</template>

