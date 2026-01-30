<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Rizqiaa</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/keen" />
    <meta property="og:site_name" content="Keen by Keenthemes" />
    <link rel="canonical" href="index.html" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.html" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
    data-kt-app-header-secondary-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header ">
                <!--begin::Header primary-->
                <div class="app-header-primary " data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky"
                    data-kt-sticky-offset="{default: 'false', lg: '300px'}">

                    <!--begin::Header primary container-->
                    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
                        id="kt_app_header_primary_container">
                        <!--begin::Logo and search-->
                        <div class="d-flex flex-grow-1 flex-lg-grow-0">
                            <!--begin::Logo wrapper-->
                            <div class="d-flex align-items-center me-7" id="kt_app_header_logo_wrapper">
                                <!--begin::Header toggle-->
                                <button
                                    class="d-lg-none btn btn-icon btn-color-white btn-active-color-primary w-35px h-35px ms-n2 me-2"
                                    id="kt_app_header_menu_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </button>
                                <!--end::Header toggle-->

                                <!--begin::Logo-->
                                <a href="index.html" class="d-flex align-items-center">
                                    <img alt="Logo" src="assets/media/logos/demo-9.svg" class="h-25px" />
                                </a>
                                <!--end::Logo-->
                            </div>
                            <!--end::Logo wrapper-->


                            <!--begin::Menu wrapper-->
                            <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                                data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                                <!--begin::Menu-->
                                <div class=" menu  
            menu-rounded 
            menu-active-bg 
            menu-state-primary 
            menu-column 
            menu-lg-row 
            menu-title-gray-700 
            menu-icon-gray-500 
            menu-arrow-gray-500 
            menu-bullet-gray-500 
            my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0
        "
                                    id="kt_app_header_menu" data-kt-menu="true">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Dashboards</span><span
                                                class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-600px">
                                            <!--begin:Dashboards menu-->
                                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible py-2 py-lg-6"
                                                data-kt-menu-dismiss="true">
                                                <!--begin:Row-->
                                                <div class="row px-lg-5">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="index.html" class="menu-link active">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i class="ki-duotone ki-basket text-primary fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">Default</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Reports &
                                                                        statistics</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/projects.html" class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-44 text-info fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">Projects</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Tasts,
                                                                        graphs & charts</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/ecommerce.html" class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i
                                                                        class="ki-duotone ki-element-11 text-danger fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">eCommerce</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Sales
                                                                        reports</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/marketing.html" class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i
                                                                        class="ki-duotone ki-chart-simple text-gray-900 fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">Marketing</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Campaings
                                                                        & conversions</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/social.html" class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-39 text-success fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">Social</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Feeds &
                                                                        Activities</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/bidding.html" class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i class="ki-duotone ki-switch text-warning fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">Bidding</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Deals &
                                                                        stock exchange</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/online-courses.html"
                                                                class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i
                                                                        class="ki-duotone ki-color-swatch text-success fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span><span
                                                                            class="path5"></span><span
                                                                            class="path6"></span><span
                                                                            class="path7"></span><span
                                                                            class="path8"></span><span
                                                                            class="path9"></span><span
                                                                            class="path10"></span><span
                                                                            class="path11"></span><span
                                                                            class="path12"></span><span
                                                                            class="path13"></span><span
                                                                            class="path14"></span><span
                                                                            class="path15"></span><span
                                                                            class="path16"></span><span
                                                                            class="path17"></span><span
                                                                            class="path18"></span><span
                                                                            class="path19"></span><span
                                                                            class="path20"></span><span
                                                                            class="path21"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span class="fs-6 fw-semibold text-gray-800">Online
                                                                        Courses</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Student
                                                                        progress</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 py-1">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/logistics.html" class="menu-link ">
                                                                <span
                                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                    <i class="ki-duotone ki-truck text-info fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span><span
                                                                            class="path4"></span><span
                                                                            class="path5"></span></i> </span>

                                                                <span class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-6 fw-semibold text-gray-800">Logistics</span>
                                                                    <span class="fs-7 fw-semibold text-muted">Shipments
                                                                        and delivery</span>
                                                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Dashboards menu-->
                                        </div><!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--end:Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Logo and search-->
                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-3" id="kt_header_user_menu_toggle">
                                <!--begin:Info-->
                                <div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
                                    <a href="pages/user-profile/overview.html"
                                        class="text-white text-hover-primary fs-6 fw-bold">Carles</a>

                                    <span class="text-gray-600 fs-7 fw-semibold d-block">Hexagon.click</span>
                                </div>
                                <!--end:Info-->

                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="assets/media/avatars/300-9.jpg" alt="user" />
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Carles <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">
                                                    carles@kt.com </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span
                                                    class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/referrals.html" class="menu-link px-5">
                                                    Referrals
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/billing.html" class="menu-link px-5">
                                                    Billing
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html" class="menu-link px-5">
                                                    Payments
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html"
                                                    class="menu-link d-flex flex-stack px-5">
                                                    Statements

                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                        title="View your statements">
                                                        <i class="ki-duotone ki-information-5 fs-5"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">
                                                            Notifications
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/statements.html" class="menu-link px-5">
                                            My Statements
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Language

                                                <span
                                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                    English <img class="w-15px h-15px rounded-1 ms-2"
                                                        src="assets/media/flags/united-states.svg" alt="" />
                                                </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="assets/media/flags/united-states.svg"
                                                            alt="" />
                                                    </span>
                                                    English
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/spain.svg"
                                                            alt="" />
                                                    </span>
                                                    Spanish
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/germany.svg"
                                                            alt="" />
                                                    </span>
                                                    German
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/japan.svg"
                                                            alt="" />
                                                    </span>
                                                    Japanese
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="assets/media/flags/france.svg"
                                                            alt="" />
                                                    </span>
                                                    French
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="authentication/layouts/corporate/sign-in.html"
                                            class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                            <!--begin::Theme mode-->
                            <div class="app-navbar-item ms-3">

                                <!--begin::Menu toggle-->
                                <a href="#"
                                    class="btn btn-icon btn-icon-white btn-active-color-primary btn-custom w-35px h-35px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span></i> <i
                                        class="ki-duotone ki-moon theme-dark-show fs-2"><span
                                            class="path1"></span><span class="path2"></span></i></a>
                                <!--begin::Menu toggle-->

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span><span class="path6"></span><span
                                                        class="path7"></span><span class="path8"></span><span
                                                        class="path9"></span><span class="path10"></span></i>
                                            </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i>
                                            </span>
                                            <span class="menu-title">
                                                System
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->

                            </div>
                            <!--end::Theme mode-->
                            <!--begin::Link-->
                            <div class="app-navbar-item ms-3">
                                <!--begin::Menu- wrapper-->
                                <a href="authentication/layouts/corporate/sign-in.html"
                                    class="btn btn-icon btn-icon-white btn-active-color-primary btn-custom w-35px h-35px w-md-40px h-md-40px">
                                    <i class="ki-duotone ki-entrance-left fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </a>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Link-->
                            <!--begin::Header menu toggle-->
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header primary container-->
                </div>
                <!--end::Header primary-->
                <!--begin::Header secondary-->
                <div class="app-header-secondary ">
                    <!--begin::Header secondary container-->
                    <div class="app-container  container-xxl d-flex align-items-stretch "
                        id="kt_app_header_secondary_container">

                        <!--begin::Toolbar-->
                        <div class="w-100 d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack me-5">
                                <span class="text-white fw-bold fs-5 me-3 me-lg-6">Ads</span>

                                <!--begin::Links-->
                                <div class="d-flex gap-1 gap-lg-2">


                                    <!--begin::Link-->
                                    <a href="#" class="custom-link rounded px-lg-4 py-lg-2 d-flex flex-center">
                                        <!--begin::Flag-->
                                        <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-20px"
                                            alt="" />
                                        <!--end::Flag-->


                                        <span
                                            class="d-none d-lg-inline text-muted fw-bold text-hover-primary fs-5 ps-3">Google</span>
                                    </a>
                                    <!--end::Link-->


                                    <!--begin::Link-->
                                    <a href="#" class="custom-link rounded px-lg-4 py-lg-2 d-flex flex-center">
                                        <!--begin::Flag-->
                                        <img src="assets/media/svg/brand-logos/facebook-3.svg" class="w-20px"
                                            alt="" />
                                        <!--end::Flag-->


                                        <span
                                            class="d-none d-lg-inline text-muted fw-bold text-hover-primary fs-5 ps-3">Facebook</span>
                                    </a>
                                    <!--end::Link-->


                                    <!--begin::Link-->
                                    <a href="#" class="custom-link rounded px-lg-4 py-lg-2 d-flex flex-center">
                                        <!--begin::Flag-->
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-20px"
                                            alt="" />
                                        <!--end::Flag-->


                                        <span
                                            class="d-none d-lg-inline text-muted fw-bold text-hover-primary fs-5 ps-3">Instagram</span>
                                    </a>
                                    <!--end::Link-->


                                    <!--begin::Link-->
                                    <a href="#" class="custom-link rounded px-lg-4 py-lg-2 d-flex flex-center">
                                        <!--begin::Flag-->
                                        <img src="assets/media/svg/brand-logos/linkedin-1.svg" class="w-20px"
                                            alt="" />
                                        <!--end::Flag-->


                                        <span
                                            class="d-none d-lg-inline text-muted fw-bold text-hover-primary fs-5 ps-3">LinkedIn</span>
                                    </a>
                                    <!--end::Link-->


                                    <!--begin::Link-->
                                    <a href="#" class="custom-link rounded px-lg-4 py-lg-2 d-flex flex-center">
                                        <i class="ki-duotone ki-abstract-13 fs-2x text-gray-600"><span
                                                class="path1"></span><span class="path2"></span></i>


                                        <span
                                            class="d-none d-lg-inline text-muted fw-bold text-hover-primary fs-5 ps-3">Upcoming</span>
                                    </a>
                                    <!--end::Link-->

                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Actions-->
                            <a href="#" class="btn btn-sm btn-primary py-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_campaign">
                                Create
                                <span class="d-none d-sm-inline ms-1">Campaign</span>
                            </a>
                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header secondary container-->
                </div>
                <!--end::Header secondary-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">




                <!--begin::Wrapper container-->
                <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">



                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">


                            @yield('content')

                        </div>
                        <!--end::Content wrapper-->


                        <!--begin::Footer-->
                        <div id="kt_app_footer"
                            class="app-footer  align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6 ">



                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2025&copy;</span>
                                <a href="https://keenthemes.com/" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://keenthemes.com/products/keen-html-pro"
                                        target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->


                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle-2.html"></script>
    <script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/new-card.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->
</html>
