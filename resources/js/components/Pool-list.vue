<template>
    <div class="row g-6 g-xl-9">
        <pool-list-item v-for="pool in pools.data.items" :key="pool" v-bind:pool-asset="pool"></pool-list-item>
    </div>
</template>

<script>
    export default {
        props: ['pools'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
