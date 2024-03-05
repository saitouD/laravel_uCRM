<script setup>
import {Link} from "@inertiajs/inertia-vue3";
</script>

<template>
    Inertiaテストです。<br>
    <a href="/">aタグでwelcomeに移動</a><br>
    <Link href="/">LinkでWelcomeに移動</Link><br>
    <Link :href="route('inertia.index')">名前付きルート</Link><br>
    <Link :href="route('inertia.show', { id : 1 })">button</Link><br>
    
</template>