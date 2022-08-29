@extends('panel.layouts.app')

@section('content')
    <div class="row g-5 g-xl-8">
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg>
                    </span>
                    <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">Toplam Kullanıcı Sayısı</div>
                    <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">{{$total_user}}</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M15.7842712,14 L12.9779221,16.8063492 L7.82842712,11.6568542 C6.26632996,10.0947571 6.26632996,7.56209717 7.82842712,6 L14,12.1715729 L14,8 C14,4.6862915 16.6862915,2 20,2 L20,14 L15.7842712,14 Z" fill="#000000" opacity="0.3"/>
                                <path d="M5.5,12 L18.5,12 C20.9852814,12 23,14.0147186 23,16.5 C23,18.9852814 20.9852814,21 18.5,21 L5.5,21 C3.01471863,21 1,18.9852814 1,16.5 C1,14.0147186 3.01471863,12 5.5,12 Z M19.5,18 C20.3284271,18 21,17.3284271 21,16.5 C21,15.6715729 20.3284271,15 19.5,15 C18.6715729,15 18,15.6715729 18,16.5 C18,17.3284271 18.6715729,18 19.5,18 Z" fill="#000000"/>
                            </g>
                        </svg>
                    </span>
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">Toplam Rol Sayısı</div>
                    <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{$total_role}}</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>
                    </span>
                    <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">Toplam Kategori Sayısı</div>
                    <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{$total_category}}</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M11.9486833,8.31622777 L10.0513167,7.68377223 C10.8160243,5.38964935 12.0426772,3.95855428 13.7574644,3.5298575 C14.650287,3.30665184 16,1.86951059 16,1 L18,1 C18,2.79715607 16.0163797,5.02668149 14.2425356,5.4701425 C13.2906561,5.70811238 12.517309,6.61035065 11.9486833,8.31622777 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M3,7 L21,7 C22.1045695,7 23,7.8954305 23,9 L23,19 C23,20.1045695 22.1045695,21 21,21 L3,21 C1.8954305,21 1,20.1045695 1,19 L1,9 C1,7.8954305 1.8954305,7 3,7 Z M7.5,9 C7.22385763,9 7,9.22385763 7,9.5 L7,10.5 C7,10.7761424 7.22385763,11 7.5,11 L8.5,11 C8.77614237,11 9,10.7761424 9,10.5 L9,9.5 C9,9.22385763 8.77614237,9 8.5,9 L7.5,9 Z M3.5,9 C3.22385763,9 3,9.22385763 3,9.5 L3,10.5 C3,10.7761424 3.22385763,11 3.5,11 L4.5,11 C4.77614237,11 5,10.7761424 5,10.5 L5,9.5 C5,9.22385763 4.77614237,9 4.5,9 L3.5,9 Z M5.5,13 C5.22385763,13 5,13.2238576 5,13.5 L5,14.5 C5,14.7761424 5.22385763,15 5.5,15 L6.5,15 C6.77614237,15 7,14.7761424 7,14.5 L7,13.5 C7,13.2238576 6.77614237,13 6.5,13 L5.5,13 Z M9.5,13 C9.22385763,13 9,13.2238576 9,13.5 L9,14.5 C9,14.7761424 9.22385763,15 9.5,15 L10.5,15 C10.7761424,15 11,14.7761424 11,14.5 L11,13.5 C11,13.2238576 10.7761424,13 10.5,13 L9.5,13 Z M13.5,13 C13.2238576,13 13,13.2238576 13,13.5 L13,14.5 C13,14.7761424 13.2238576,15 13.5,15 L14.5,15 C14.7761424,15 15,14.7761424 15,14.5 L15,13.5 C15,13.2238576 14.7761424,13 14.5,13 L13.5,13 Z M17.5,13 C17.2238576,13 17,13.2238576 17,13.5 L17,14.5 C17,14.7761424 17.2238576,15 17.5,15 L18.5,15 C18.7761424,15 19,14.7761424 19,14.5 L19,13.5 C19,13.2238576 18.7761424,13 18.5,13 L17.5,13 Z M11.5,9 C11.2238576,9 11,9.22385763 11,9.5 L11,10.5 C11,10.7761424 11.2238576,11 11.5,11 L12.5,11 C12.7761424,11 13,10.7761424 13,10.5 L13,9.5 C13,9.22385763 12.7761424,9 12.5,9 L11.5,9 Z M5.5,17 C5.22385763,17 5,17.2238576 5,17.5 L5,18.5 C5,18.7761424 5.22385763,19 5.5,19 L18.5,19 C18.7761424,19 19,18.7761424 19,18.5 L19,17.5 C19,17.2238576 18.7761424,17 18.5,17 L5.5,17 Z M15.5,9 C15.2238576,9 15,9.22385763 15,9.5 L15,10.5 C15,10.7761424 15.2238576,11 15.5,11 L16.5,11 C16.7761424,11 17,10.7761424 17,10.5 L17,9.5 C17,9.22385763 16.7761424,9 16.5,9 L15.5,9 Z M19.5,9 C19.2238576,9 19,9.22385763 19,9.5 L19,10.5 C19,10.7761424 19.2238576,11 19.5,11 L20.5,11 C20.7761424,11 21,10.7761424 21,10.5 L21,9.5 C21,9.22385763 20.7761424,9 20.5,9 L19.5,9 Z" fill="#000000"/>
                            </g>
                        </svg>
                    </span>
                    <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">Toplam Yazı Sayısı</div>
                    <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{$total_post}}</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
    </div>

@endsection
