<script setup lang="ts">

    import {Product} from "@/types/index"

    const props = defineProps<Product>();

    const {name,price,description}=props

</script>

<template>
    <a href={template.url}>
        <div class="group relative border-2 border-black shadow-large h-full">
            <div>
                <img src='https://jeaninegabrielle.files.wordpress.com/2021/06/il_794xn.3061715833_iqsq.jpg?w=794'
                    alt="{template.name}" class="aspect-[384/246]  object-cover bg-center h-full border-2  border-black" />
            </div>
            <div class="p-6">
                <div
                    class=" flex items-center justify-between space-x-8 text-lg font-semibold leading-6 text-neutral-900 dark:text-white group-hover:text-accent-400 ">
                    <h3 class="text-xl lg:text-3xl text-black">
                        {{name}}
                    </h3>
                    <p class="text-black">${{price}}</p>
                </div>
                <p class="mt-3 text-xl text-black">{{description}}</p>
            </div>
        </div>
    </a>
</template>
