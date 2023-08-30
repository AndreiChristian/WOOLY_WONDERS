<script setup lang="ts">

const props = defineProps<{
    text: string,
    deactivated?: boolean,
    handleClick?: () => void
}>();

const { text = 'Placeholder', deactivated = false, handleClick = () => console.log('Hello') } = props;
</script>

<template>
    <button :disabled="deactivated" @click="handleClick"
        class="text-black items-center shadow-[5px_5px_black] inline-flex px-6 focus:outline-none justify-center text-center bg-red-600 border-black ease-in-out hover:text-white transform transition hover:shadow-none border-2 duration-200 hover:bg-black py-3 rounded-xl w-full">
        {{ text }}
    </button>
</template>

