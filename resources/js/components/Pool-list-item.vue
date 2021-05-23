<template>
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <a href="pages/projects/project.html" class="card border border-2 border-gray-300 border-hover">
            <!--begin::Card-->
            <div class="card border border-2 border-gray-300 border-hover">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-9">
                    <!--begin::Card Title-->
                    <div class="card-title m-0">
                        <div class="symbol-group symbol-hover">
                            <!--begin::User-->
                            <div class="symbol symbol-50px symbol-circle" data-bs-toggle="tooltip" title="" :data-bs-original-title="poolAsset.token_0.contract_ticker_symbol">
                                <img alt="Pic" v-lazy="poolAsset.token_0.logo_url">
                            </div>
                            <!--begin::User-->
                            <!--begin::User-->
                            <div class="symbol symbol-50px symbol-circle" data-bs-toggle="tooltip" title="" :data-bs-original-title="poolAsset.token_1.contract_ticker_symbol">
                                <img alt="Pic" v-lazy="poolAsset.token_1.logo_url">
                            </div>
                            <!--begin::User-->
                        </div>
                        <!--end::Avatar-->
                    </div>
                    <!--end::Car Title-->
                </div>
                <!--end:: Card header-->
                <!--begin:: Card body-->
                <div class="card-body p-9">
                    <!--begin::Name-->
                    <div class="fs-3 fw-bolder text-dark">{{poolAsset.token_0.contract_ticker_symbol}} - {{poolAsset.token_1.contract_ticker_symbol}}</div>
                    <!--end::Name-->
                    <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">{{poolAsset.token_0.contract_name}} - {{poolAsset.token_1.contract_name}}</p>
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap mb-5">
                        <!--begin::Due-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 text-gray-800 fw-bolder">
                                {{poolAsset.total_liquidity_quote | currency}}</div>
                            <div class="fw-bold text-gray-400">Total Liquidity</div>
                        </div>
                        <!--end::Due-->
                        <!--begin::Budget-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 text-gray-800 fw-bolder">{{poolAsset.volume_24h_quote | currency}}</div>
                            <div class="fw-bold text-gray-400">24h Volumes</div>
                        </div>
                        <!--end::Budget-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack flex-wrapr">
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover my-1">
                            <div v-if="pool_name === 'panecake'" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                <img alt="Pic" src="https://miro.medium.com/max/3150/1*dG8HvEw1-PUT3xZH3_WZEw.png" />
                            </div>
                            <div v-if="pool_name === 'uniswap'" class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                <img alt="Pic" src="https://assets.bit2me.com/assets/images/crypto-icons/v5/uni-circle-solid-default.svg" />
                            </div>
                        </div>
                        <!--end::Users-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:: Card body-->
            </div>
            <!--end::Card-->
        </a>
    </div>
    <!--end::Col-->
</template>

<script>
    export default {
        props: ['pool-asset','pool_name'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
