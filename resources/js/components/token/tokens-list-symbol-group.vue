<template>
    <div class="symbol-group symbol-hover mb-3">
        <tokens-list-symbol-group-item v-for="token in tokens" v-if="token.id < 10" :key="token.name" v-bind:token="token"></tokens-list-symbol-group-item>
        <!--begin::All Tokens-->
        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
            <span class="symbol-label bg-dark text-white fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="View more tokens">+{{tokens.size}}</span>
        </a>
        <!--end::All Tokens-->
    </div>
</template>

<script>
export default {
    props: ['tokens'],
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
