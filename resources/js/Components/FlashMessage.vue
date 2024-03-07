<script setup>

</script>

<template>
    <div v-if="$page.props.flash.status === '成功しました'" class="bg-blue-300 text-white p-4">
    {{ $page.props.flash.status }}
    </div>
    <div v-if="$page.props.flash.status === '削除しました'" class="bg-red-300 text-white p-4">
    {{ $page.props.flash.status }}
    </div>
</template>