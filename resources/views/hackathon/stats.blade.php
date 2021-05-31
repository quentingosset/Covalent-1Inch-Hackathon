
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../">
    <meta charset="utf-8" />
    <title>dungeons & data - 1inch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="" style="">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid " id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container">
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-bold">
                                    <div class="fs-6 text-gray-600">Dataset are based on 7-day block data.</div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Navbar-->
                        <div class="card mb-6 mb-xl-9">
                            <div class="card-body pt-9 pb-0">
                                <!--begin::Details-->
                                <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                    <!--begin::Image-->
                                    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                        <img class="mw-50px mw-lg-75px" src="{{$general_data['icon']}}" alt="image" />
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Wrapper-->
                                    <div class="flex-grow-1">
                                        <!--begin::Head-->
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center mb-1">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{$general_data['name']}}</a>
                                                    <!--<span class="badge badge-light-success me-auto">In Progress</span>-->
                                                </div>
                                                <!--end::Status-->
                                                <!--begin::Description-->
                                                <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">{{$general_data['description']}}</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Actions-->
                                            <div class="d-flex my-4">
                                                <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129) "/>
                                                        </svg>
                                                    </span>
                                                    Open #{{$general_data['name']}}
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="me-0">
                                                    <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                        <span class="symbol symbol-20px symbol-md-20px">
                                                            <img class="symbol symbol-20px" src="{{$general_data['all_network'][$general_data['network']]['logo_url']}}"/>
                                                        </span>
                                                    </button>
                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-250px py-3 m-1" data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Network</div>
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{route('dex_stats', [56,strtolower($general_data['name'])])}}" class="menu-link flex-stack px-3">
                                                                <span class="symbol symbol-20px symbol-md-20px">
                                                                    <img class="symbol symbol-20px" src="https://etherscan.io/images/brands/bscscan-logo.png"/>
                                                                </span>
                                                                Binance Smart Chain
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target name for future usage and reference" aria-label="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="{{route('dex_stats', [1,strtolower($general_data['name'])])}}" class="menu-link flex-stack px-3">
                                                                <span class="symbol symbol-20px symbol-md-20px">
                                                                    <img class="symbol symbol-20px" src="https://etherscan.io/images/ethereum-icon.png"/>
                                                                </span>
                                                                Ethereum
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target name for future usage and reference" aria-label="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Head-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap justify-content-start">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-down.svg-->
                                                        <!--<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
																			<path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
																		</g>
																	</svg>
																</span>-->
                                                        <!--end::Svg Icon-->
                                                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-decimal-places="2" data-kt-countup-value="0" data-kt-countup-prefix="$">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold fs-6 text-gray-400">Total Liquidity</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-up.svg-->
                                                        <!--<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
																			<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																</span>-->
                                                        <!--end::Svg Icon-->
                                                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-decimal-places="2" data-kt-countup-value="0" data-kt-countup-prefix="$">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold fs-6 text-gray-400">Volume (24h)</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-decimal-places="2" data-kt-countup-value="0" data-kt-countup-prefix="$"data-kt-countup-prefix="$">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold fs-6 text-gray-400">Fee (24h)</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="0">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold fs-6 text-gray-400">Total Transaction (24h)</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Details-->
                                <div class="separator"></div>
                                <!--begin::Nav wrapper-->
                                <div class="d-flex overflow-auto h-55px">
                                    <!--begin::Nav links-->
                                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                                        <!--begin::Nav item-->
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary me-6" href="{{route('dex', [$general_data['network'], strtolower($general_data['name'])])}}">Overview</a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary me-6 active" href="#">Stats</a>
                                        </li>
                                        <!--end::Nav item-->
                                    </ul>
                                    <!--end::Nav links-->
                                </div>
                                <!--end::Nav wrapper-->
                            </div>
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Modals-->
                        <!--begin::Modal - View Users-->
                        <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
															</g>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--begin::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                        <!--begin::Heading-->
                                        <div class="text-center mb-13">
                                            <!--begin::Title-->
                                            <h1 class="mb-3">Browse Users</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-gray-400 fw-bold fs-5">If you need more info, please check out our
                                                <a href="#" class="link-primary fw-bolder">Users Directory</a>.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Users-->
                                        <div class="mb-15">
                                            <!--begin::List-->
                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Smith
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody Macy
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max Smith
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">max@kt.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean Bean
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian Cox
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela Collins
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis Mitcham
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia Wild
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil Owen
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan Wilson
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Bold
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana Crown
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-5">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <!--begin::Name-->
                                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert Doe
                                                                <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
                                                            <!--end::Name-->
                                                            <!--begin::Email-->
                                                            <div class="fw-bold text-gray-400">robert@benko.com</div>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Sales-->
                                                        <div class="text-end">
                                                            <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                                            <div class="fs-7 text-muted">Sales</div>
                                                        </div>
                                                        <!--end::Sales-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Notice-->
                                        <div class="d-flex justify-content-between">
                                            <!--begin::Label-->
                                            <div class="fw-bold">
                                                <label class="fs-6">Adding Users by Team Members</label>
                                                <div class="fs-7 text-gray-400">If you need more info, please check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                                <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - View Users-->
                        <!--begin::Modal - Users Search-->
                        <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
															</g>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--begin::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                        <!--begin::Content-->
                                        <div class="text-center mb-13">
                                            <h1 class="mb-3">Search Users</h1>
                                            <div class="text-gray-400 fw-bold fs-5">Invite Collaborators To Your Project</div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Search-->
                                        <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                            <!--begin::Form-->
                                            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                <input type="hidden" />
                                                <!--end::Hidden input-->
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/stockholm/General/Search.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                                                <!--end::Input-->
                                                <!--begin::Spinner-->
                                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
															<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
														</span>
                                                <!--end::Spinner-->
                                                <!--begin::Reset-->
                                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
															<!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																		<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																		<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
																	</g>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Reset-->
                                            </form>
                                            <!--end::Form-->
                                            <!--begin::Wrapper-->
                                            <div class="py-5">
                                                <!--begin::Suggestions-->
                                                <div data-kt-search-element="suggestions">
                                                    <!--begin::Heading-->
                                                    <h3 class="fw-bold mb-5">Recently searched:</h3>
                                                    <!--end::Heading-->
                                                    <!--begin::Users-->
                                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                                        <!--begin::User-->
                                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                                <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-bold">
                                                                <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                                <span class="badge badge-light">Art Director</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </a>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-bold">
                                                                <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                                <span class="badge badge-light">Marketing Analytic</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </a>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-bold">
                                                                <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                                <span class="badge badge-light">Software Enginer</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </a>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                                <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-bold">
                                                                <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                                <span class="badge badge-light">Web Developer</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </a>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-bold">
                                                                <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                                <span class="badge badge-light">UI/UX Designer</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </a>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Users-->
                                                </div>
                                                <!--end::Suggestions-->
                                                <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                                <div data-kt-search-element="results" class="d-none">
                                                    <!--begin::Users-->
                                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                                                    <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2" selected="selected">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                                                    <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1" selected="selected">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                                                    <div class="fw-bold text-gray-400">max@kt.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                                                    <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2" selected="selected">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                                                    <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                                                    <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2" selected="selected">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                                                    <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                                                    <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2" selected="selected">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                                                    <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1" selected="selected">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                                                    <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                                                    <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2" selected="selected">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                                                    <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1" selected="selected">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                                                    <div class="fw-bold text-gray-400">robert@benko.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                                                    <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                                                    <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2" selected="selected">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                                                    <div class="fw-bold text-gray-400">ethan@loop.com.au</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1" selected="selected">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Separator-->
                                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                        <!--end::Separator-->
                                                        <!--begin::User-->
                                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Checkbox-->
                                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                                                    <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Access menu-->
                                                            <div class="ms-2 w-100px">
                                                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                    <option value="1">Guest</option>
                                                                    <option value="2">Owner</option>
                                                                    <option value="3" selected="selected">Can Edit</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Access menu-->
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Users-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex flex-center mt-15">
                                                        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                                        <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Results-->
                                                <!--begin::Empty-->
                                                <div data-kt-search-element="empty" class="text-center d-none">
                                                    <!--begin::Message-->
                                                    <div class="fw-bold py-10">
                                                        <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                                        <div class="text-gray-400 fs-6">Try to search by username, full name or email...</div>
                                                    </div>
                                                    <!--end::Message-->
                                                    <!--begin::Illustration-->
                                                    <img src="assets/media/svg/illustrations/alert.svg" alt="" class="mx-auto w-100 mh-200px mb-n7 mt-10" />
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Empty-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Users Search-->
                        <!--begin::Modal - New Target-->
                        <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content rounded">
                                    <!--begin::Modal header-->
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
															</g>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--begin::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                        <!--begin:Form-->
                                        <form id="kt_modal_new_target_form" class="form" action="#">
                                            <!--begin::Heading-->
                                            <div class="mb-13 text-center">
                                                <!--begin::Title-->
                                                <h1 class="mb-3">Set First Target</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-bold fs-5">If you need more info, please check
                                                    <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Target Title</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2">Assign</label>
                                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="team_assign">
                                                        <option value="">Select user...</option>
                                                        <option value="1">Karina Clark</option>
                                                        <option value="2">Robert Doe</option>
                                                        <option value="3">Niel Owen</option>
                                                        <option value="4">Olivia Wild</option>
                                                        <option value="5">Sean Bean</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                                    <!--begin::Input-->
                                                    <div class="position-relative d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-20px me-4 position-absolute ms-4">
																	<span class="symbol-label bg-secondary">
																		<!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-grid.svg-->
																		<span class="svg-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1" />
																					<path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000" />
																				</g>
																			</svg>
																		</span>
                                                                        <!--end::Svg Icon-->
																	</span>
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Datepicker-->
                                                        <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
                                                        <!--end::Datepicker-->
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8">
                                                <label class="fs-6 fw-bold mb-2">Target Details</label>
                                                <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Tags</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-stack mb-8">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-bold">Adding Users by Team Members</label>
                                                    <div class="fs-7 fw-bold text-gray-400">If you need more info, please check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                    <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-15 fv-row">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="fw-bold me-5">
                                                        <label class="fs-6">Notifications</label>
                                                        <div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkboxes-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
                                                            <span class="form-check-label fw-bold">Email</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
                                                            <span class="form-check-label fw-bold">Phone</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Checkboxes-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-white me-3">Cancel</button>
                                                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end:Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - New Target-->
                        <!--end::Modals-->
                        <!--begin::Row-->
                        <div class="row g-6 g-xl-9">
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-4">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px me-5">
                                                <div class="symbol-label">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Largest swap</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-2tx fw-bolder mb-3">{{new \Akaunting\Money\Money($hackthon_data->largestSwap, new \Akaunting\Money\Currency('USD'), true)}}</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                            <!--begin::Number-->
                                            <div class="fw-bolder text-{{(($hackthon_data->largestSwap - $hackthon_data_yesterday->largestSwap) < 0)? "danger" : "success"}} me-2">{{(($hackthon_data->largestSwap - $hackthon_data_yesterday->largestSwap) >= 0)? "+" : ""}}{{new \Akaunting\Money\Money(($hackthon_data->largestSwap - $hackthon_data_yesterday->largestSwap), new \Akaunting\Money\Currency('USD'), true) }}</div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">on 7 days</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$hackthon_data->endingBlock?? "-" }}</span>
                                            <span class="text-gray-400 fs-7">block height</span>
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-4">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px me-5">
                                                <div class="symbol-label">
                                                    <i class="fas fa-balance-scale"></i>
                                                </div>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Average / Median swap</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-2tx fw-bolder">{{new \Akaunting\Money\Money(($hackthon_data->total / $hackthon_data->totalSwap), new \Akaunting\Money\Currency('USD'), true)}}</div>
                                        <div class="fs-tx fw-bolder mb-3">Median : {{new \Akaunting\Money\Money(($hackthon_data->median), new \Akaunting\Money\Currency('USD'), true)}}</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                            <!--begin::Number-->
                                            <div class="fw-bolder text-{{(($hackthon_data->total / $hackthon_data->totalSwap) - ($hackthon_data_yesterday->total / $hackthon_data_yesterday->totalSwap) < 0)? "danger" : "success"}} me-2">{{(($hackthon_data->total / $hackthon_data->totalSwap) - ($hackthon_data_yesterday->total / $hackthon_data_yesterday->totalSwap) >= 0)? "+" : ""}}{{new \Akaunting\Money\Money((($hackthon_data->total / $hackthon_data->totalSwap) - ($hackthon_data_yesterday->total / $hackthon_data_yesterday->totalSwap)), new \Akaunting\Money\Currency('USD'), true) }}</div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">on 7 days</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$hackthon_data->endingBlock?? "-" }}</span>
                                            <span class="text-gray-400 fs-7">block height</span>
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-4">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px me-5">
                                                <div class="symbol-label">
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Total volume /7 Days</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-2tx fw-bolder mb-3">{{new \Akaunting\Money\Money(($hackthon_data->total), new \Akaunting\Money\Currency('USD'), true)}}</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                            <!--begin::Number-->
                                            <div class="fw-bolder text-{{(($hackthon_data->total - $hackthon_data_yesterday->total) < 0)? "danger" : "success"}} me-2">{{(($hackthon_data->total - $hackthon_data_yesterday->total) >= 0)? "+" : ""}}{{new \Akaunting\Money\Money(($hackthon_data->total - $hackthon_data_yesterday->total), new \Akaunting\Money\Currency('USD'), true) }}</div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">on 7 days</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$hackthon_data->endingBlock?? "-" }}</span>
                                            <span class="text-gray-400 fs-7">block height</span>
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-4">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px me-5">
                                                <div class="symbol-label">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </div>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Total swaps /7 Days</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-2tx fw-bolder mb-3">{{number_format($hackthon_data->totalSwap)}}</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                            <!--begin::Number-->
                                            <div class="fw-bolder {{(($hackthon_data->totalSwap - $hackthon_data_yesterday->totalSwap) < 0)? "text-danger" : "text-success" }} me-2">{{(($hackthon_data->totalSwap - $hackthon_data_yesterday->totalSwap) >= 0)? "+" : "" }}{{number_format($hackthon_data->totalSwap - $hackthon_data_yesterday->totalSwap)}}</div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">on 7 days</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$hackthon_data->endingBlock?? "-" }}</span>
                                            <span class="text-gray-400 fs-7">block height</span>
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-4">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px me-5">
                                                <div class="symbol-label">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Unique users</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-2tx fw-bolder mb-3">{{number_format($hackthon_data->usersTotal)}}</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                            <!--begin::Number-->
                                            <div class="fw-bolder text-{{(($hackthon_data->usersTotal - $hackthon_data_yesterday->usersTotal) < 0)? "danger" : "success"}} me-2">{{(($hackthon_data->usersTotal - $hackthon_data_yesterday->usersTotal) >= 0)? "+" : ""}}{{number_format($hackthon_data->usersTotal - $hackthon_data_yesterday->usersTotal)}}</div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">on 7 days</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$hackthon_data->endingBlock?? "-" }}</span>
                                            <span class="text-gray-400 fs-7">block height</span>
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-6 col-xl-4">
                                <!--begin::Card-->
                                <div class="card h-100">
                                    <!--begin::Card header-->
                                    <div class="card-header flex-nowrap border-0 pt-9">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <!--begin::Icon-->
                                            <div class="symbol symbol-45px me-5">
                                                <div class="symbol-label">
                                                    <i class="fas fa-burn"></i>
                                                </div>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Total GAS used</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                        <!--begin::Heading-->
                                        <div class="fs-tx fw-bolder mb-3">Too much time to fetch all the TX for real time<br>Work on Challenge2 for deposit / withdraw</div>
                                        <!--end::Heading-->
                                        <!--begin::Stats-->
                                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                            <!--begin::Number-->
                                            <div class="fw-bolder text-danger me-2">+0$</div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold text-gray-400">on 7 days</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Indicator-->
                                        <div class="d-flex align-items-center fw-bold">
                                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">{{$hackthon_data->endingBlock?? "-" }}</span>
                                            <span class="text-gray-400 fs-7">block height</span>
                                        </div>
                                        <!--end::Indicator-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Table-->
                        <div class="card card-flush mt-6 mt-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bolder mb-1">Top Volume</h3>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                                        <!--begin::Head-->
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                        <tr>
                                            <th class="min-w-250px">Name</th>
                                            <th class="min-w-150px">Volume</th>
                                            <th class="min-w-90px">Total Tokens</th>
                                            <th class="min-w-50px">Unique users</th>
                                            <th class="min-w-50px text-end">Top 5 traders</th>
                                        </tr>
                                        </thead>
                                        <!--end::Head-->
                                        <!--begin::Body-->
                                        <tbody class="fs-6">
                                        @foreach ($hackthon_data->usersBySwap as $swapTokens)
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <div class="symbol-group symbol-hover">
                                                                <!--begin::User-->
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" :data-bs-original-title="{{$swapTokens->symbol?? "-"}}">
                                                                    <img alt="Pic" src="{{$swapTokens->logo_url?? "-"}}">
                                                                </div>
                                                                <!--begin::User-->
                                                            </div>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">{{$swapTokens->symbol?? "-"}}</a>
                                                            <div class="fw-bold text-gray-400">{{$swapTokens->name?? "-"}}</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>{{new \Akaunting\Money\Money($swapTokens->price, new \Akaunting\Money\Currency('USD'), true)}}</td>
                                                <td>{{number_format($swapTokens->amount)}}</td>
                                                <td>{{$swapTokens->user_swap}}</td>
                                                <td class="text-end">
                                                    <a href="" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_top_volume_app_{{$swapTokens->address}}">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <!--end::Body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->

            @foreach($hackthon_data->usersBySwap as $swapTokens)
            <!--begin::Modal - Top Volume App-->
            <div class="modal fade" id="kt_modal_top_volume_app_{{$swapTokens->address}}" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Top trader {{$swapTokens->name}}</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                                <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            <div class="" id="kt_modal_create_app_stepper">
                                <!--begin::Aside-->
                                <!--begin::Content-->
                                <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                        <tr class="border-0">
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-110px"></th>
                                                            <th class="p-0 min-w-50px"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                        @foreach($swapTokens->users as $key => $user)
                                                        <tr>
                                                            <td>
                                                                <div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					{{$key+1}}
																				</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$user->address}}</a>
                                                            </td>
                                                            <td class="">
                                                                <span class="badge badge-light-success">{{new \Akaunting\Money\Money($user->price, new \Akaunting\Money\Currency('USD'), true)}}</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="{{route('profile', [$general_data['network'],$user->address])}}" target="_blank" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                                                    <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24"></polygon>
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																						</g>
																					</svg>
																				</span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Content-->
                            </div>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Top Volume App-->
            @endforeach
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-white" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
                <!--begin::Timeline items-->
                <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Chat2.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
												<path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile APp” project:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/150-11.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting with customer</a>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">Application Design</span>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/150-3.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/150-11.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Progress-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">In Progress</span>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project Delivery Preparation</a>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">CRM System Development</span>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/150-5.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                    <!--begin::Progress-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">Completed</span>
                                    </div>
                                    <!--end::Progress-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Thumbtack.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z" fill="#000000" />
												<polygon fill="#000000" opacity="0.3" transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)" points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::Timeline heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="assets/media/avatars/150-2.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/General/Attachment2.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
													<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
													<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
													<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
												</g>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                        <img src="assets/media/avatars/150-6.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">1.9mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">18kb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
                                            <!--end::Desc-->
                                            <!--begin::Number-->
                                            <div class="text-gray-400">20mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Home/Library.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
													<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
												</g>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Task
                                    <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
                                    <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/150-11.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
												<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                        <img src="assets/media/avatars/150-3.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-200px" src="assets/media/demos/demo1.png" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-200px" src="assets/media/demos/demo2.png" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-200px" src="assets/media/demos/demo3.png" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Urgent-mail.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
												<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">New case
                                    <a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
												<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="assets/media/avatars/150-14.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/stockholm/Code/Git4.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z" fill="#000000" fill-rule="nonzero" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-bold">
                                            <h4 class="text-gray-800 fw-bolder">Database Backup Process Completed!</h4>
                                            <div class="fs-6 text-gray-600 pe-7">Login into Metronic Admin Dashboard to make sure the data integrity is OK</div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::Timeline line-->
                        <!--begin::Timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/stockholm/Shopping/Cart4.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.25" d="M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z" fill="#7E8299" />
												<path d="M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z" fill="#7E8299" />
												<path d="M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z" fill="#7E8299" />
												<path d="M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z" fill="#7E8299" />
												<g opacity="0.25">
													<path d="M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z" fill="#7E8299" />
													<path d="M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z" fill="#7E8299" />
												</g>
											</svg>
										</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Timeline icon-->
                        <!--begin::Timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">New order
                                    <a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                    <!--end::Info-->
                                    <!--begin::User-->
                                    <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                </div>
                <!--end::Timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="pages/profile/activity.html" class="btn btn-bg-white text-primary">View All Activities
                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
								<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
							</g>
						</svg>
					</span>
                <!--end::Svg Icon--></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::Activities drawer-->
<!--begin::Exolore drawer toggle-->
<button id="kt_explore_toggle" class="btn btn-sm btn-white btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90" title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
    <span id="kt_explore_toggle_label">Explore</span>
</button>
<!--end::Exolore drawer toggle-->
<!--begin::Exolore drawer-->
<div id="kt_explore" class="bg-white" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '375px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
    <!--begin::Card-->
    <div class="card shadow-none w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_explore_header">
            <h3 class="card-title fw-bolder text-gray-700">Explore</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_explore_body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">
                <!--begin::Demos-->
                <div class="mb-0">
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo1</h3>
                        <div class="overlay overflow-hidden border border-4 border-primary p-2 rounded">
                            <div class="overlay-wrapper rounded">
                                <img src="assets/media/demos/demo1.png" alt="demo" class="w-100 rounded" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-primary shadow">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo2</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo2.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo3</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo3.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo4</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo4.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo5</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo5.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo6</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo6.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo7</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo7.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo8</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo8.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo9</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo9.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo10</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo10.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo11</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo11.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo12</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo12.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo13</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo13.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo14</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo14.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo15</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo15.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo16</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo16.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo17</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo17.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                    <!--begin::Demo-->
                    <div class="mb-7">
                        <h3 class="fw-bold text-center mb-3">Demo18</h3>
                        <div class="overlay overflow-hidden border border-4 p-2 rounded">
                            <div class="overlay-wrapper">
                                <img src="assets/media/demos/demo18.png" alt="demo" class="w-100 rounded opacity-75" />
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-10">
                                <div class="badge badge-light-primary px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Demo-->
                </div>
                <!--end::Demos-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_explore_footer">
            <a href="https://1.envato.market/EA4JP" class="btn btn-primary">Purchase Metronic</a>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>
<!--end::Exolore drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-white" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-gray-400">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-flip="left, center, top">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
                            <a href="https://keenthemes.com">Keenthemes.com</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->
                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-paperclip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-upload fs-3"></i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Modals-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-400 fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                    <img alt="Logo" src="assets/media/svg/social-icons/google.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-white fs-7 fw-bold text-gray-400 px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                    <!--end::Heading-->
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                    <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                    <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                    <div class="fw-bold text-gray-400">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                    <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                    <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                    <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                    <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                    <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                    <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                    <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-bold text-gray-400">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                    <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                    <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                    <div class="fw-bold text-gray-400">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-bold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-gray-400">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-bold text-gray-400">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>
                    <div class="text-gray-400 fw-bold fs-5">If you need more info, please check
                        <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</a>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
                                            <div class="fw-bold opacity-50">Best for startups</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
                                            <div class="fw-bold opacity-50">Best for 100+ team size</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
                                                <span class="badge badge-light-success ms-2 fs-7">Most popular</span></h2>
                                            <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
                                            <div class="fw-bold opacity-50">Requet a custom license</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-gray-400 fw-bold">Optimal for 10+ team size and new startup</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-gray-400 fw-bold">Optimal for 100+ team size and grown company</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-400 flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Error-circle.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-gray-400 fw-bold">Optimal for 1000+ team and enterpise</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/stockholm/Code/Done-circle.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
															<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-white me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--end::Modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Up-2.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<!--<script src="assets/js/custom/pages/projects/project/project.js"></script>-->
<script>
    // Class definition
    var KTProjectOverview = function () {
        // Colors
        var primary = KTUtil.getCssVariableValue('--bs-primary');
        var lightPrimary = KTUtil.getCssVariableValue('--bs-light-primary');
        var success = KTUtil.getCssVariableValue('--bs-success');
        var lightSuccess = KTUtil.getCssVariableValue('--bs-light-success');
        var gray200 = KTUtil.getCssVariableValue('--bs-gray-200');
        var gray500 = KTUtil.getCssVariableValue('--bs-gray-500');

        // Private functions
        var initChart = function () {
            // init chart
            var element = document.getElementById("project_overview_chart");

            if (!element) {
                return;
            }

            var config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [0, 0],
                        backgroundColor: ['#50CD89', '#F1416C']
                    }],
                    labels: ['Active', 'Empty']
                },
                options: {
                    chart: {
                        fontFamily: 'inherit'
                    },
                    cutoutPercentage: 75,
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    title: {
                        display: false
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    tooltips: {
                        enabled: true,
                        intersect: false,
                        mode: 'nearest',
                        bodySpacing: 5,
                        yPadding: 10,
                        xPadding: 10,
                        caretPadding: 0,
                        displayColors: false,
                        backgroundColor: '#20D489',
                        titleFontColor: '#ffffff',
                        cornerRadius: 4,
                        footerSpacing: 0,
                        titleSpacing: 0
                    }
                }
            };

            var ctx = element.getContext('2d');
            var myDoughnut = new Chart(ctx, config);
        }

        var initGraph = function () {
            var element = document.getElementById("kt_project_overview_graph");
            var height = parseInt(KTUtil.css(element, 'height'));

            if (!element) {
                return;
            }

            var options = {
                series: [{
                    name: 'Liquidity',
                    data: [70, 70, 80, 80, 75, 75, 75]
                }, {
                    name: 'Volume',
                    data: [55, 55, 60, 60, 55, 55, 60]
                }],
                chart: {
                    type: 'area',
                    height: height,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {

                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'solid',
                    opacity: 1
                },
                stroke: {
                    curve: 'smooth',
                    show: true,
                    width: 3,
                    colors: [primary, success]
                },
                xaxis: {
                    categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: gray500,
                            fontSize: '12px'
                        }
                    },
                    crosshairs: {
                        position: 'front',
                        stroke: {
                            color: primary,
                            width: 1,
                            dashArray: 3
                        }
                    },
                    tooltip: {
                        enabled: true,
                        formatter: undefined,
                        offsetY: 0,
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: gray500,
                            fontSize: '12px',
                        }
                    }
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: '12px',
                    },
                    y: {
                        formatter: function (val) {
                            return val + " $"
                        }
                    }
                },
                colors: [lightPrimary, lightSuccess],
                grid: {
                    borderColor: gray200,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    }
                },
                markers: {
                    //size: 5,
                    colors: [lightPrimary, lightSuccess],
                    strokeColor: [primary, success],
                    strokeWidth: 3
                }
            };

            var chart = new ApexCharts(element, options);
            chart.render();
        }

        var initTable = function () {
            var table = document.querySelector('#kt_profile_overview_table');

            if (!table) {
                return;
            }

            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const dateRow = row.querySelectorAll('td');
                const realDate = moment(dateRow[1].innerHTML, "MMM D, YYYY").format();
                dateRow[1].setAttribute('data-order', realDate);
            });

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            const datatable = $(table).DataTable({
                "info": false,
                'order': []
            });

            // Filter dropdown elements
            const filterOrders = document.getElementById('kt_filter_orders');
            const filterYear = document.getElementById('kt_filter_year');

            // Filter by order status --- official docs reference: https://datatables.net/reference/api/search()
            filterOrders.addEventListener('change', function (e) {
                datatable.column(3).search(e.target.value).draw();
            });

            // Filter by date --- official docs reference: https://momentjs.com/docs/
            var minDate;
            var maxDate;

            filterYear.addEventListener('change', function (e) {
                const value = e.target.value;
                switch (value) {
                    case 'thisyear': {
                        minDate = moment().startOf('year').format();
                        maxDate = moment().endOf('year').format();
                        datatable.draw();
                        break;
                    }
                    case 'thismonth': {
                        minDate = moment().startOf('month').format();
                        maxDate = moment().endOf('month').format();
                        datatable.draw();
                        break;
                    }
                    case 'lastmonth': {
                        minDate = moment().subtract(1, 'months').startOf('month').format();
                        maxDate = moment().subtract(1, 'months').endOf('month').format();
                        datatable.draw();
                        break;
                    }
                    case 'last90days': {
                        minDate = moment().subtract(30, 'days').format();
                        maxDate = moment().format();
                        datatable.draw();
                        break;
                    }
                    default: {
                        minDate = moment().subtract(100, 'years').startOf('month').format();
                        maxDate = moment().add(1, 'months').endOf('month').format();
                        datatable.draw();
                        break;
                    }
                }
            });

            // Date range filter --- offical docs reference: https://datatables.net/examples/plug-ins/range_filtering.html
            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    var min = minDate;
                    var max = maxDate;
                    var date = parseFloat(moment(data[1]).format()) || 0; // use data for the age column

                    if ((isNaN(min) && isNaN(max)) ||
                        (isNaN(min) && date <= max) ||
                        (min <= date && isNaN(max)) ||
                        (min <= date && date <= max)) {
                        return true;
                    }
                    return false;
                }
            );

            // Search --- official docs reference: https://datatables.net/reference/api/search()
            var filterSearch = document.getElementById('kt_filter_search');
            filterSearch.addEventListener('keyup', function (e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Public methods
        return {
            init: function () {
                initChart();
                initGraph();
                initTable();
            }
        }
    }();


    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTProjectOverview.init();
    });
</script>
<script src="assets/js/custom/modals/users-search.js"></script>
<script src="assets/js/custom/modals/new-target.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/modals/create-app.js"></script>
<script src="assets/js/custom/modals/upgrade-plan.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
