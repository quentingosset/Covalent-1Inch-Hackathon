<template>
    <div class="row g-6 g-xl-9">
        <pool-list-item v-for="pool in pools" :key="pool.exchange" v-bind:pool-asset="pool" :pool_name="pool_name"></pool-list-item>
    </div>
</template>

<script>
    export default {
        props: ['pools','pool_name'],
        mounted() {
            console.log(pools)
        }
    }
</script>
