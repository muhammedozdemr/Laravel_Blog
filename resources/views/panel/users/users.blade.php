@extends('panel.layouts.app')
@section('content')
    <!--begin::Tables Widget 9-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">

            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Kullanıcılar Listesi</span>
            </h3>
            @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kullanıcı Ekle'))
                <div class="card-toolbar">
                    <a href="{{route('panel.users.create')}}" class="btn btn-sm btn-light btn-active-primary">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span>
                        Yeni
                    </a>
                </div>
            @endif
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                @if(count($user_list)>0)
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="w-25px">#</th>
                            <th class="min-w-200px">Adı</th>
                            <th class="min-w-200px">Email</th>
                            <th class="min-w-150px">Rol</th>
                            <th class="min-w-150px"></th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                        @foreach($user_list as $user)
                            <tr>
                                <td>{{$counter++}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$user->name}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{$user->email}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="badge badge-light-success">{{$role->name}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kullanıcı Düzenle'))
                                        <a href="{{ route('panel.users.update', ['id' => $user->id]) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																			<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																		</svg>
																	</span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        @endif
                                            @if(auth()->user()->can('Tüm izinler') || auth()->user()->can('Kullanıcı Sil'))
                                                @include('panel.layouts.partials.buttons.delete-icon', ['url' => route('panel.users.delete', ['id' => $user->id])])
                                            @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                @else
                    <div><h1>Kayıt Bulunmadı</h1></div>
                @endif
            </div>
            <p>{{$user_list->links()}}</p>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 9-->
@endsection
@push('page_scripts')
    <script>
        $(".hidden").hide();
    </script>
@endpush

