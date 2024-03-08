å<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import FlashMessage from '@/Components/FlashMessage.vue'
//import { onMounted } from 'vue';  onMountedページを読み込んだタイミングで動作する
import Pagination from '@/Components/Pagination.vue'

const props = defineProps({
    customers: Object, //paginateしてDBから受け取る場合は、形式が変わるのでarrayでなくObjectにする。
})

// onMounted(() =>{ 
//     console.log(props.customers)
// })
</script>

<template>
</template>
