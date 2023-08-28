<script setup lang="ts">

import Footer from "@/Components/Footer.vue"
import Navbar from "@/Components/Navbar.vue"

</script>

<template>
    <Navbar></Navbar>
    <slot />
    <Footer></Footer>
</template>
