<script setup lang="ts">
import BaseLayout from '@/Layouts/BaseLayout.vue'
import Header from '@/Components/Shared/Header.vue'
import ProductCard from "@/Components/Store/ProductCard.vue"
import { Product, Category } from "@/types/index"


const { categories } = defineProps<{
    categories: Category[]
}>()


</script>

<template>
    <BaseLayout>
        <section>
            <Header :title="'All of our wooly friends'"></Header>
            <div class="relative items-center w-full mx-auto 2xl:max-w-7xl p-8 lg:p-20 2xl:px-0">
                <div class="max-w-xl mx-auto text-center">
                    <p class="xl:text-xl tracking-tight text-black mt-3">
                        Look around and see if you like something that you like.
                    </p>
                </div>
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
        <section class="bg-white" aria-labelledby="blog" id="blog">
            <div class="relative items-center w-full mx-auto 2xl:max-w-7xl p-8 lg:p-20 2xl:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-12 mt-16 [">
                    <ProductCard :name="'Dummy product'" :description="'Dummy description'" :price="15"></ProductCard>
                </div>
            </div>
        </section>
    </BaseLayout>
</template>

