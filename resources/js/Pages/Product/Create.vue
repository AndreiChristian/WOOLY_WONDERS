<script setup lang="ts">
import BaseLayout from '@/Layouts/BaseLayout.vue'
import Header from '@/Components/Shared/Header.vue'
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';
import { Product } from "@/types/index"

const form: Product = reactive({
    name: "",
    description: "",
    price: 0,
})

function submit() {
    router.post('/product', { ...form })
}

</script>

<template>
    <BaseLayout>
        <Header :title="'Create a new product'"></Header>
        <form @submit.prevent="submit" class="flex flex-col gap-4 p-4 box-border ">
            <label for="name">Name</label>
            <input type="text" id="name" v-model="form.name">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" v-model="form.description"></textarea>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" v-model="form.price">
            <button type="submit">Sumit</button>
        </form>
    </BaseLayout>
</template>
