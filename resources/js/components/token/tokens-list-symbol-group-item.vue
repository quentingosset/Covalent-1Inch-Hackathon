<template>
    <!--begin::Token-->
    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" :data-bs-original-title="token.name">
        <img alt="Pic" v-lazy="token['logo_url']">
    </div>
    <!--end::Token-->
</template>

<script>
    export default {
        props: ['token'],
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
