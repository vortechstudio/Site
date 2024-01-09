<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Titre de la page' }}</title>
    <link rel="stylesheet" href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.bundle.css') }}">
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    @livewireStyles
    @vite(['resources/css/app.css'])
    @yield("styles")
    @stack("styles")
</head>
<body
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed">
    <script>
        let defaultThemeMode = "light";
        let themeMode;
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
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="">
                <x-base.background-animated />
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between bg-dark p-10 rounded-3">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                    <i class="ki-outline ki-abstract-14 fs-2hx"></i>
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="{{ route('home') }}">
                                    <img alt="Logo" src="{{ asset('/storage/logo_long.png') }}" class="logo-default h-25px h-lg-30px" />
                                    <img alt="Logo" src="{{ asset('/storage/logo_long_white.png') }}" class="logo-sticky h-20px h-lg-25px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block z-index-3" id="kt_header_nav_wrapper">
                                <livewire:template.header />
                            </div>
                            <!--end::Menu wrapper-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <livewire:blog.slideshow />
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->
        {{ $slot }}
        <!--begin::Footer Section-->
        <livewire:template.footer />
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-outline ki-arrow-up"></i>
        </div>
        <!--end::Scrolltop-->
    </div>

    <script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
    @livewireScripts
    @vite(['resources/js/app.js'])
    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />
    @yield("scripts")
    @stack('scripts')
</body>
