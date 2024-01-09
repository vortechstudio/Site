<div class="mb-0">
    <!--begin::Curve top-->
    <div class="landing-curve landing-dark-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
    <!--begin::Wrapper-->
    <div class="landing-dark-bg pt-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row py-10 py-lg-20">
                <!--begin::Col-->
                <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                    <!--begin::Block-->
                    <div class="rounded landing-dark-border p-9 mb-10">
                        <!--begin::Title-->
                        <h2 class="text-white">Vous avez besoins d'aide ?</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <span class="fw-normal fs-4 text-gray-700">
                            N'hésitez pas à poster votre demande sur <a href="">Vortech Lab</a>, notre plateforme communautaire, des milliers de joueurs seront vous aiguiller convenablement !
                        </span>
                        <!--end::Text-->
                    </div>
                    <!--end::Block-->
                    <!--begin::Block-->
                    <div class="rounded landing-dark-border p-9">
                        <!--begin::Title-->
                        <h2 class="text-white">Si je n'ai pas trouvé l'aide escompté</h2>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <span class="fw-normal fs-4 text-gray-700">
                            Vous pouvez nous contacter directement via notre formulaire de contact, nous vous répondrons dans les plus brefs délais !
                        </span>
                        <!--end::Text-->
                    </div>
                    <!--end::Block-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-6 ps-lg-16">
                    <!--begin::Navs-->
                    <div class="d-flex justify-content-center">
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column me-20">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-500 mb-6">En savoir plus sur {{ config('app.name') }}</h4>
                            <!--end::Subtitle-->
                            @foreach($pages as $page)
                                <a href="/cms/{{ $page->slug_page }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">{{ $page->title }}</a>
                            @endforeach
                            <!--begin::Link-->

                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold flex-column ms-lg-20">
                            <!--begin::Subtitle-->
                            <h4 class="fw-bold text-gray-500 mb-6">Resté à l'écoute</h4>
                            <!--end::Subtitle-->
                            <!--begin::Link-->
                            <a href="https://www.facebook.com/profile.php?id=61555408412702" class="mb-6">
                                <img src="/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://twitter.com/VortechStudio" class="mb-6">
                                <img src="/assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://www.instagram.com/vortechstudio9" class="mb-6">
                                <img src="/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                            </a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a href="https://lab.{{ config('app.domain') }}" class="mb-6">
                                <img src="{{ asset('/storage/logo_seul_white.png') }}" class="h-20px me-2" alt="" />
                                <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Vortech LAB</span>
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Navs-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
        <!--begin::Separator-->
        <div class="landing-dark-separator"></div>
        <!--end::Separator-->
        <!--begin::Container-->
        <div class="container">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                <!--begin::Copyright-->
                <div class="d-flex align-items-center order-2 order-md-1">
                    <!--begin::Logo-->
                    <a href="{{ route('home') }}">
                        <img alt="Logo" src="{{ asset('/storage/logo_long_white.png') }}" class="h-30px h-md-40px" />
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Logo image-->
                    <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="{{ config('app.url') }}">&copy; 2023-2024 {{ config('app.name') }}.</span>
                    <!--end::Logo image-->
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                    @foreach($pages as $page)
                    <li class="menu-item me-5">
                        <a href="/cms/{{ $page->page_slug }}" target="_blank" class="menu-link px-2">{{ $page->title }}</a>
                    </li>
                    @endforeach
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
</div>
