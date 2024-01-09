<div class="d-lg-block p-5 p-lg-0 z-index-2" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
    <!--begin::Menu-->
    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-white menu-state-title-primary nav nav-flush fs-1 fw-semibold align-items-center" id="kt_landing_menu">
        @foreach($menu as $name => $element)
            @if($element['visible'])
            <div class="menu-item">
                <a class="menu-link py-3 px-4 px-xxl-6 {{ $element['route'] == request()->route()->named($element['route']) ? 'active' : '' }}" href="{{ $element['route'] !== '#' ? route($element['route']) : '#' }}">{{ $element['name'] }}</a>
            </div>
            @else
                <div class="me-3">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                        <i class="{{ $element['icon'] }} fs-1"></i>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                        @foreach($element['childrens'] as $name => $element)
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="{{ route($element['route']) }}" class="menu-link px-3">
                                    {{ $element['name'] }}
                                </a>
                            </div>
                            <!--end::Menu item-->
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
        <!--begin::Menu item-->
    </div>
    <!--end::Menu-->
</div>
