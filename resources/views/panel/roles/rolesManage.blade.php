@extends('panel.layouts.app')

@section('content')
    @isset($role)
    @else
        @php
            $role = new stdClass();
        @endphp
    @endisset
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title fs-3 fw-bolder">Rol İşlemleri</div>
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
                        <div class="fs-6 fw-bold mt-2 mb-3">RolAdı</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" placeholder="Rol Adı" name="name" value="{{$role->name ?? ''}}">

                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">İzin Adı</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <select name="permissions[]" aria-label="Seçiniz" data-control="select2" data-placeholder="Seçiniz.." class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-16-dtue" tabindex="-1" aria-hidden="true" multiple>
                            <option></option>
                            @foreach($permissions as $permission)
                                <option @if(request()->route('id') != null)@foreach($role->permissions as $selected){{ $permission->name  == ($selected->name ?? '') ? 'selected' : '' }}@endforeach @endif value="{{$permission->name}}">{{$permission->name}}</option>
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

