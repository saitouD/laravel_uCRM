<script setup>
    import{ Inertia } from '@inertiajs/inertia'
    
    defineProps({//変数の受け取り
    id : String,
    blog: Object //blogは配列だけどshowに渡すのは一件だけなのでobjectにしておく
    })

    const deleteConfirm = id => { //idについて、このidは下のdeleteConfirmの引数だけど、jsの場合関数に渡す引数が1つの場合、()を省略できるらしい
        Inertia.delete(`/inertia/${id}`,{  //jsの決まりにより、飛び先はバッククウォートで囲む
            onBefore:() => confirm('本当に削除するの？')
        })
    }

</script>
<template>
    {{ blog.id }}<br>
    {{ blog.title }}<br>
    <button @click="deleteConfirm(blog.id)">削除</button>
</template> 