@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
@endsection

@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <!--begin::Row-->
        <div class="row g-5 g-xxl-10">
            <!--begin::Col-->
            <div class="col-xxl-4 mb-xxl-10">

                <!--begin::Card Widget 22-->
                <div class="card card-reset mb-5 mb-xl-10">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Row-->
                        <div class="row g-5 g-lg-9">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Card-->
                                <div class="card card-shadow">
                                    <!--begin::Body-->
                                    <div class="card-body p-0">
                                        <!--begin::Items-->
                                        <a href='apps/subscriptions/list.html'
                                            class="btn btn-active-color-primary px-7 py-6 text-start w-100">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-plus-square fs-2x fs-lg-2hx text-gray-500 ms-n1"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Desc-->
                                            <div class="fw-bold fs-5 pt-4">
                                                Add New </div>
                                            <!--end::Desc-->
                                        </a>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Card-->
                                <div class="card card-shadow">
                                    <!--begin::Body-->
                                    <div class="card-body p-0">
                                        <!--begin::Items-->
                                        <a href='apps/ecommerce/catalog/products.html'
                                            class="btn btn-active-color-primary px-7 py-6 text-start w-100">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-element-11 fs-2x fs-lg-2hx text-gray-500 ms-n1"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Desc-->
                                            <div class="fw-bold fs-5 pt-4">
                                                eCommerce </div>
                                            <!--end::Desc-->
                                        </a>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Card-->
                                <div class="card card-shadow">
                                    <!--begin::Body-->
                                    <div class="card-body p-0">
                                        <!--begin::Items-->
                                        <a href='pages/contact.html'
                                            class="btn btn-active-color-primary px-7 py-6 text-start w-100">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-message-edit fs-2x fs-lg-2hx text-gray-500 ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Desc-->
                                            <div class="fw-bold fs-5 pt-4">
                                                Contacts </div>
                                            <!--end::Desc-->
                                        </a>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Card-->
                                <div class="card card-shadow">
                                    <!--begin::Body-->
                                    <div class="card-body p-0">
                                        <!--begin::Items-->
                                        <a href='apps/file-manager/folders.html'
                                            class="btn btn-active-color-primary px-7 py-6 text-start w-100">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-rocket fs-2x fs-lg-2hx text-gray-500 ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Desc-->
                                            <div class="fw-bold fs-5 pt-4">
                                                File Manager </div>
                                            <!--end::Desc-->
                                        </a>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Card-->
                                <div class="card card-shadow">
                                    <!--begin::Body-->
                                    <div class="card-body p-0">
                                        <!--begin::Items-->
                                        <a href='apps/subscriptions/list.html'
                                            class="btn btn-active-color-primary px-7 py-6 text-start w-100">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-chart-pie-3 fs-2x fs-lg-2hx text-gray-500 ms-n1"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Desc-->
                                            <div class="fw-bold fs-5 pt-4">
                                                Subscriptions </div>
                                            <!--end::Desc-->
                                        </a>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Card-->
                                <div class="card card-shadow">
                                    <!--begin::Body-->
                                    <div class="card-body p-0">
                                        <!--begin::Items-->
                                        <a href='apps/support-center/overview.html'
                                            class="btn btn-active-color-primary px-7 py-6 text-start w-100">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-rescue fs-2x fs-lg-2hx text-gray-500 ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Desc-->
                                            <div class="fw-bold fs-5 pt-4">
                                                Help Center </div>
                                            <!--end::Desc-->
                                        </a>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->

                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card Widget 22-->

                <!--begin::Card Widget 23-->
                <div class="card border-0 ">
                    <!--begin::Body-->
                    <div class="card-body py-12">
                        <!--begin::Action-->
                        <button class="btn btn-light-warning fs-3 fw-bolder w-100 py-5 mb-13" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Campaign Glossary</button>
                        <!--end::Action-->

                        <!--begin::Block-->
                        <div class="d-flex border border-primary border-dashed rounded p-5 bg-light-primary mb-6">
                            <!--begin::Icon-->
                            <span class="me-5">
                                <i class="ki-duotone ki-information fs-3x text-primary"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Section-->
                            <div class="me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bolder">Important
                                    Note!</a>

                                <span class="text-gray-700 fw-semibold d-block fs-5">Please add tracking code to your
                                    website to optimize your campaigns</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Block-->

                        <!--begin::Action-->
                        <button class="btn btn-primary fs-3 fw-bolder w-100 py-5" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_new_card">Add Conversion Tracking</button>
                        <!--end::Action-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card Widget 23-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xxl-8 mb-5 mb-xl-10">
                <!--begin::Engage widget 14-->
                <div class="card border-0 mb-5 mb-xl-11" data-bs-theme="light" style="background-color: #844AFF">
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <!--begin::Row-->
                        <div class="row align-items-center lh-1 h-100">
                            <!--begin::Col-->
                            <div class="col-7 ps-xl-10 pe-5">
                                <!--begin::Title-->
                                <div class="fs-2qx fw-bold text-white mb-6">
                                    Upgrade Your Plan
                                </div>
                                <!--end::Title-->

                                <!--begin::Text-->
                                <span class="fw-semibold text-white fs-6 mb-10 d-block opacity-75">
                                    Flat cartoony and illustrations with vivid unblended purple hair lady
                                </span>
                                <!--end::Text-->

                                <!--begin::Items-->
                                <div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-9">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center me-5 me-xl-13">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px symbol-circle me-3">
                                            <span class="symbol-label" style="background: rgba(255, 255, 255, 0.1)">
                                                <i class="ki-duotone ki-abstract-41 fs-5 text-white"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="text-white">
                                            <span class="fw-semibold d-block fs-8 opacity-75 mb-2">Projects</span>
                                            <span class="fw-bold fs-7">Up to 500</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px symbol-circle me-3">
                                            <span class="symbol-label" style="background: rgba(255, 255, 255, 0.1)">
                                                <i class="ki-duotone ki-abstract-26 fs-5 text-white"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="text-white">
                                            <span class="fw-semibold opacity-75 d-block fs-8 mb-2">Tasks</span>
                                            <span class="fw-bold fs-7">Unlimited</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->

                                <!--begin::Action-->
                                <div class="d-flex d-grid gap-2">
                                    <a href="#" class="btn btn-success me-lg-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                    <a href="#" class="btn text-white" style="background: rgba(255, 255, 255, 0.2)"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Help</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-5 pt-5 pt-lg-15">
                                <!--begin::Illustration-->
                                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end bgi-position-y-bottom h-325px"
                                    style="background-image:url('/keen/demo9/assets/media/svg/illustrations/easy/8.svg">
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 14-->



                <!--begin::Table widget 17-->
                <div class="card card-flush border-0 ">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fs-3 fw-bold text-gray-800">Campaigns</span>

                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Select a campaign & date range to view
                                data</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                class="btn btn-sm btn-light d-flex align-items-center px-4">
                                <!--begin::Display range-->
                                <div class="text-gray-600 fw-bold">
                                    Loading date range...
                                </div>
                                <!--end::Display range-->

                                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span><span class="path5"></span><span
                                        class="path6"></span></i>
                            </div>
                            <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-6">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-6 my-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fs-7 fw-bold text-gray-500">
                                        <th class="p-0 pb-3 w-150px text-start">STATUS</th>
                                        <th class="p-0 pb-3 min-w-100px text-start">NAME</th>
                                        <th class="p-0 pb-3 min-w-100px text-center">BUDGET</th>
                                        <th class="p-0 pb-3 w-250px text-start">OPTIMIZATION SCORE</th>
                                        <th class="p-0 pb-3 w-50px text-end">ACTION</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Live Now</span>
                                        </td>

                                        <td class="ps-0 text-start">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Marni Schlanger</span>
                                            <span class="text-gray-500 fw-semibold fs-7">20 Jul 2021</span>
                                        </td>

                                        <td class="text-center">
                                            <span class="text-gray-800 fw-bold fs-6">$15</span>
                                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                                        </td>

                                        <td class="ps-0 pe-20">
                                            <div class="progress bg-light-primary rounded">
                                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                                    style="height: 12px;width: 120px" aria-valuenow="120"
                                                    aria-valuemin="0" aria-valuemax="120px"></div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Reviewing</span>
                                        </td>

                                        <td class="ps-0 text-start">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Addison Smart</span>
                                            <span class="text-gray-500 fw-semibold fs-7">19 Jul 2021</span>
                                        </td>

                                        <td class="text-center">
                                            <span class="text-gray-800 fw-bold fs-6">$10</span>
                                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                                        </td>

                                        <td class="ps-0 pe-20">
                                            <div class="progress bg-light-primary rounded">
                                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                                    style="height: 12px;width: 10px" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="10px"></div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Paused</span>
                                        </td>

                                        <td class="ps-0 text-start">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Paul Melone</span>
                                            <span class="text-gray-500 fw-semibold fs-7">21 Jul 2021</span>
                                        </td>

                                        <td class="text-center">
                                            <span class="text-gray-800 fw-bold fs-6">$3</span>
                                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                                        </td>

                                        <td class="ps-0 pe-20">
                                            <div class="progress bg-light-primary rounded">
                                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                                    style="height: 12px;width: 60px" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="60px"></div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge py-3 px-4 fs-7 badge-light-success">Live Now</span>
                                        </td>

                                        <td class="ps-0 text-start">
                                            <span class="text-gray-800 fw-bold fs-6 d-block">Marni Schlanger</span>
                                            <span class="text-gray-500 fw-semibold fs-7">23 Jul 2021</span>
                                        </td>

                                        <td class="text-center">
                                            <span class="text-gray-800 fw-bold fs-6">$23</span>
                                            <span class="text-gray-500 fw-bold fs-7 d-block">Daily</span>
                                        </td>

                                        <td class="ps-0 pe-20">
                                            <div class="progress bg-light-primary rounded">
                                                <div class="progress-bar bg-primary rounded m-0" role="progressbar"
                                                    style="height: 12px;width: 160px" aria-valuenow="160"
                                                    aria-valuemin="0" aria-valuemax="160px"></div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->

                        <!--begin::Separator-->
                        <div class="separator separator-dashed border-gray-200 mb-n4"></div>
                        <!--end::Separator-->

                        <!--begin::Pagination-->
                        <div class="d-flex flex-stack flex-wrap pt-10">
                            <div class="fs-6 fw-semibold text-gray-700">
                                Showing 1 to 10 of 50 entries
                            </div>

                            <!--begin::Pages-->
                            <ul class="pagination">
                                <li class="page-item previous">
                                    <a href="#" class="page-link"><i class="previous"></i></a>
                                </li>

                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>

                                <li class="page-item">
                                    <a href="#" class="page-link">6</a>
                                </li>

                                <li class="page-item next">
                                    <a href="#" class="page-link"><i class="next"></i></a>
                                </li>
                            </ul>
                            <!--end::Pages-->
                        </div>
                        <!--end::Pagination-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Table widget 17-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Engage widget 13-->
        <div class="card card-flush ">
            <!--begin::Header-->
            <div class="card-header pt-7 mb-2">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800">Time Series</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Let’s add some useful info here</span>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <a href="assets/media/apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Help</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body text-center">
                <!--begin::Select-->
                <select class="form-select fs-4 text-gray-600 ps-7 py-5 mb-7" data-control="select2"
                    data-placeholder="Dropdown Fixed">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                </select>
                <!--end::Select-->

                <!--begin::Illustration-->
                <img class="h-250px mb-8 theme-light-show" src="assets/media/illustrations/sigma-1/21.png"
                    alt="" />
                <img class="h-250px mb-8 theme-dark-show" src="assets/media/illustrations/sigma-1/21-dark.png"
                    alt="" />
                <!--end::Illustration-->

                <!--begin::Text-->
                <h1 class="fw-semibold text-gray-600 mb-lg-12">
                    We are not able to generate chart of campaigns <br />
                    at the moment. Please try later.
                </h1>
                <!--end::Text-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 13-->



    </div>
    <!--end::Content-->
@endsection