@extends('component.layout')
@section('title', 'Step 1: Setup your content idea')
@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            @include('component.breadcrumb')
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">

                    <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                        <!--begin::Body-->
                        <div class="card-body d-flex ps-xl-15">
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                                    <span class="me-2">"Unlock the power of <span
                                            class="position-relative d-inline-block text-danger">
                                            <a href="../../demo44/dist/pages/user-profile/overview.html"
                                                class="text-danger opacity-75-hover">AI</a>
                                            <!--begin::Separator-->
                                            <span
                                                class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                            <!--end::Separator-->
                                        </span> and <span class="position-relative d-inline-block text-danger">
                                            <a href="../../demo44/dist/pages/user-profile/overview.html"
                                                class="text-danger opacity-75-hover">ScriptGPT</a>
                                            <!--begin::Separator-->
                                            <span
                                                class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                            <!--end::Separator-->
                                        </span>".<br>Bid farewell to manual labor, save your time and effort."
                                </div>
                                <!--end::Title-->
                                <!--begin::Action-->
                                <div class="mb-3">
                                    <a href='#' class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">Learn how it works!</a>
                                    <a href="#"
                                        class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">Start
                                        now</a>
                                </div>
                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sigma-1/17-dark.png"
                                class="position-absolute me-3 bottom-0 end-0 h-200px" alt="" />
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--begin::Card header-->
                    <div id="step1" class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Step 1: Setup your content idea</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <form action="{{ route('store.step1') }}" method="post">
                        @csrf
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Content title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row">
                                                    <input required type="text" name="content_title"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Campaign title" value="10 facts today" />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Content instruction</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input required type="text" name="content_instruction"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Company name"
                                                value="10 facts today that can make your business stronger" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Content
                                            Emotion</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select required name="content_emotion" aria-label="Select content emotion"
                                                data-control="select2" data-placeholder="Select content emotion"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">Select content emotion</option>
                                                <option>
                                                    Angry</option>
                                                <option>
                                                    Cheerful</option>
                                                <option>
                                                    Natural (Recommended)</option>
                                                <option>
                                                    Convincing</option>
                                                <option>
                                                    Sad</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Language
                                            style</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select required name="content_language_style" aria-label="Select language style"
                                                data-control="select2" data-placeholder="Select language style"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">Select language style</option>
                                                <option>
                                                    Question</option>
                                                <option>
                                                    Exclamation</option>
                                                <option>
                                                    Imperative</option>
                                                <option>
                                                    Conditional</option>
                                                <option>
                                                    Assertion</option>
                                                <option>
                                                    Concession</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Language</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select required name="content_language" aria-label="Select language"
                                                data-control="select2" data-placeholder="Select language"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">Select language</option>
                                                <option>
                                                    English</option>
                                                <option>
                                                    English (Manglish)</option>
                                                <option>
                                                    English (Singlish)</option>
                                                <option>
                                                    Malay</option>
                                                <option>
                                                    Malay (Dialek Kelantan) </option>
                                                <option>
                                                    Malay (Dialek Terengganu)</option>
                                                <option>
                                                    Malay (Dialek Pahang)</option>
                                                <option>
                                                    Malay (Dialek Negeri Sembilan)</option>
                                                <option>
                                                    Malay (Dialek Utara)</option>
                                                <option>
                                                    Malay (Dialek Sabah)</option>
                                                <option>
                                                    Malay (Dialek Sarawak)</option>
                                                <option>
                                                    Bahasa Iban</option>
                                                <option>
                                                    Bahasa Kadazan</option>
                                                <option>
                                                    Javanese</option>
                                                <option>
                                                    Bugis</option>
                                                <option>
                                                    Chinese (Mandarin)</option>
                                                <option>
                                                    Chinese (Hokkien)</option>
                                                <option>
                                                    Chinese (Cantonese)</option>
                                                <option>
                                                    Chinese (Hainanese)</option>
                                                <option>
                                                    Chinese (Hakka)</option>
                                                <option>
                                                    Tamil</option>
                                                <option>
                                                    Hindi</option>
                                                <option>
                                                    Thai</option>
                                                <option>
                                                    Bahasa Indonesia</option>
                                                <option>
                                                    Tagalog</option>
                                                <option>
                                                    Tieng Viet</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Content
                                            length</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input required type="text" name="content_length"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Company name" value="500" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Input group-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Next</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </form>
                    <!--end::Content-->
                </div>
                <!--end::Basic info-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer-->
    </div>
@stop
