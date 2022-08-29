<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
     data-kt-scroll-height="auto"
     data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
     data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
    <!--begin::Menu-->
    <div
        class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
            <a class="menu-link" href="{{route('panel.home')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                <span class="menu-title">Dashboard</span>
            </a>
        </div>
        <!--User Menu-->
        @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kullanıcı Listele'))
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                    fill="black"></path>
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                      fill="black"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Kullanıcılar</span>
                                    <span class="menu-arrow"></span>
                                </span>
                <div class="menu-sub menu-sub-accordion">
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kullanıcı Listele'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.users.users')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Kullanıcı Listesi</span>
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kullanıcı Ekle'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.users.create')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Kullanıcı Ekle</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <!--User Menu end-->
        <!--Role Menu-->
        @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Rolleri Listele'))
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path
                                                    d="M15.7842712,14 L12.9779221,16.8063492 L7.82842712,11.6568542 C6.26632996,10.0947571 6.26632996,7.56209717 7.82842712,6 L14,12.1715729 L14,8 C14,4.6862915 16.6862915,2 20,2 L20,14 L15.7842712,14 Z"
                                                    fill="#000000" opacity="0.3"/>
                                                <path
                                                    d="M5.5,12 L18.5,12 C20.9852814,12 23,14.0147186 23,16.5 C23,18.9852814 20.9852814,21 18.5,21 L5.5,21 C3.01471863,21 1,18.9852814 1,16.5 C1,14.0147186 3.01471863,12 5.5,12 Z M19.5,18 C20.3284271,18 21,17.3284271 21,16.5 C21,15.6715729 20.3284271,15 19.5,15 C18.6715729,15 18,15.6715729 18,16.5 C18,17.3284271 18.6715729,18 19.5,18 Z"
                                                    fill="#000000"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Roller</span>
                                <span class="menu-arrow"></span>
                            </span>
                <div class="menu-sub menu-sub-accordion">
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Rolleri Listele'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.roles.roles')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Rol Listesi</span>
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Rol Ekle'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.roles.create')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                <span class="menu-title">Rol Ekle</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <!--Role Menu end-->
        <!--Category Menu-->
        @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kategorileri Listele'))
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                                <path
                                                    d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                    fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Kategoriler</span>
                                <span class="menu-arrow"></span>
                            </span>
                <div class="menu-sub menu-sub-accordion">
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kategorileri Listele'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.categories.categories')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Kategori Listesi</span>
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kategori Ekle'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.categories.create')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                <span class="menu-title">Kategori Ekle</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <!--Category Menu end-->
        <!--Post Menu-->
        @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Yazıları Listele'))
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path
                                                    d="M11.9486833,8.31622777 L10.0513167,7.68377223 C10.8160243,5.38964935 12.0426772,3.95855428 13.7574644,3.5298575 C14.650287,3.30665184 16,1.86951059 16,1 L18,1 C18,2.79715607 16.0163797,5.02668149 14.2425356,5.4701425 C13.2906561,5.70811238 12.517309,6.61035065 11.9486833,8.31622777 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path
                                                    d="M3,7 L21,7 C22.1045695,7 23,7.8954305 23,9 L23,19 C23,20.1045695 22.1045695,21 21,21 L3,21 C1.8954305,21 1,20.1045695 1,19 L1,9 C1,7.8954305 1.8954305,7 3,7 Z M7.5,9 C7.22385763,9 7,9.22385763 7,9.5 L7,10.5 C7,10.7761424 7.22385763,11 7.5,11 L8.5,11 C8.77614237,11 9,10.7761424 9,10.5 L9,9.5 C9,9.22385763 8.77614237,9 8.5,9 L7.5,9 Z M3.5,9 C3.22385763,9 3,9.22385763 3,9.5 L3,10.5 C3,10.7761424 3.22385763,11 3.5,11 L4.5,11 C4.77614237,11 5,10.7761424 5,10.5 L5,9.5 C5,9.22385763 4.77614237,9 4.5,9 L3.5,9 Z M5.5,13 C5.22385763,13 5,13.2238576 5,13.5 L5,14.5 C5,14.7761424 5.22385763,15 5.5,15 L6.5,15 C6.77614237,15 7,14.7761424 7,14.5 L7,13.5 C7,13.2238576 6.77614237,13 6.5,13 L5.5,13 Z M9.5,13 C9.22385763,13 9,13.2238576 9,13.5 L9,14.5 C9,14.7761424 9.22385763,15 9.5,15 L10.5,15 C10.7761424,15 11,14.7761424 11,14.5 L11,13.5 C11,13.2238576 10.7761424,13 10.5,13 L9.5,13 Z M13.5,13 C13.2238576,13 13,13.2238576 13,13.5 L13,14.5 C13,14.7761424 13.2238576,15 13.5,15 L14.5,15 C14.7761424,15 15,14.7761424 15,14.5 L15,13.5 C15,13.2238576 14.7761424,13 14.5,13 L13.5,13 Z M17.5,13 C17.2238576,13 17,13.2238576 17,13.5 L17,14.5 C17,14.7761424 17.2238576,15 17.5,15 L18.5,15 C18.7761424,15 19,14.7761424 19,14.5 L19,13.5 C19,13.2238576 18.7761424,13 18.5,13 L17.5,13 Z M11.5,9 C11.2238576,9 11,9.22385763 11,9.5 L11,10.5 C11,10.7761424 11.2238576,11 11.5,11 L12.5,11 C12.7761424,11 13,10.7761424 13,10.5 L13,9.5 C13,9.22385763 12.7761424,9 12.5,9 L11.5,9 Z M5.5,17 C5.22385763,17 5,17.2238576 5,17.5 L5,18.5 C5,18.7761424 5.22385763,19 5.5,19 L18.5,19 C18.7761424,19 19,18.7761424 19,18.5 L19,17.5 C19,17.2238576 18.7761424,17 18.5,17 L5.5,17 Z M15.5,9 C15.2238576,9 15,9.22385763 15,9.5 L15,10.5 C15,10.7761424 15.2238576,11 15.5,11 L16.5,11 C16.7761424,11 17,10.7761424 17,10.5 L17,9.5 C17,9.22385763 16.7761424,9 16.5,9 L15.5,9 Z M19.5,9 C19.2238576,9 19,9.22385763 19,9.5 L19,10.5 C19,10.7761424 19.2238576,11 19.5,11 L20.5,11 C20.7761424,11 21,10.7761424 21,10.5 L21,9.5 C21,9.22385763 20.7761424,9 20.5,9 L19.5,9 Z"
                                                    fill="#000000"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Yazılar</span>
                                <span class="menu-arrow"></span>
                            </span>
                <div class="menu-sub menu-sub-accordion">
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Yazıları Listele'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.posts.posts')}}">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                <span class="menu-title">Yazı Listesi</span>
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Yazı Ekle'))
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('panel.posts.create')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                <span class="menu-title">Yazı Ekle</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <!--Post Menu end-->


        <div class="menu-item">
            <div class="menu-content">
                <div class="separator mx-1 my-4"></div>
            </div>
        </div>
    </div>
    <!--end::Menu-->
</div>
