<script setup>
import BaseLayout from '@/Layouts/BaseLayout.vue'
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3'
import { Category } from '@/types/index'


const form = reactive < Category > ({
    name: ""
})

function submit() {
    router.post("/category", form)
}

</script>

<template>
    <BaseLayout>
        <section class="bg-yellow-500 2xl:max-w-7xl mx-auto border-b-2 border-black">
            <div class="relative justify-center max-h-full overflow-hidden lg:px-0 md:px-12">
                <div class="relative z-10 flex flex-col flex-1 px-4 py-10 lg:py-32 md:flex-none md:px-28 sm:justify-center">
                    <div class="w-full mx-auto md:px-0 sm:px-4 max-w-xl">
                        <div class="flex flex-col">
                            <div>
                                <h2 class="text-xl text-black lg:text-5xl text-center font-display">
                                    Create a new catgeory
                                </h2>
                            </div>
                        </div>
                        <form @submit.prevent="submit" class="mt-6">
                            <div class="space-y-6">
                                <div
                                    class="border-2 border-black divide-y-2 divide-black shadow-large rounded-xl overflow-hidden">
                                    <div>
                                        <label name="name" class="sr-only"> Category Name</label>
                                        <input type="text" placeholder="Catgeory Name" v-model="form.name"
                                            class="block w-full px-3 py-4 text-xl text-black border-2 border-transparent appearance-none placeholder-black border-black focus:border-black focus:bg-lila-500 focus:outline-none focus:ring-black sm:text-sm" />
                                    </div>
                                </div>

                                <div class="flex-col flex gap-3 mt-10 sm:flex-row">
                                    <button
                                        class="text-black items-center shadow-[5px_5px_black] inline-flex px-6 focus:outline-none justify-center text-center bg-white border-black ease-in-out hover:text-white transform transition hover:shadow-none border-2 duration-200 hover:bg-black py-3 rounded-xl w-full">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </BaseLayout>
</template>
