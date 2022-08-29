@extends('panel.layouts.app')

@section('content')
    @isset($user)
    @else
        @php
            $user = new stdClass();
        @endphp
    @endisset
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title fs-3 fw-bolder">Kullanıcı İşlemleri</div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Form-->
        <form id="kt_project_settings_form" class="form" method="POST">
            @csrf
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Adı</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" name="name"
                               placeholder="Adı" value="{{old('name', $user->name ?? '')}}"/>
                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Email</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="email" class="form-control form-control-solid" name="email"
                               placeholder="Email" value="{{old('email', $user->email ?? '')}}"/>
                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Parola</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="password" class="form-control form-control-solid" name="password"
                               placeholder="Parola"/>
                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Rol</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <select name="role" aria-label="Seçiniz" data-control="select2"
                                data-placeholder="Seçiniz.."
                                class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                data-select2-id="select2-data-19-71lx" tabindex="-1" aria-hidden="true">
                            <option></option>
                            @foreach($roles as $role)
                                <option
                                    @if(request()->route('id') != null ){{$user->hasRole($role->name) ? 'selected' : ''}} @endif value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Kaydet</button>
            </div>
            <!--end::Card footer-->
        </form>
        <!--end:Form-->
    </div>
    <!--end::Card-->
@endsection

