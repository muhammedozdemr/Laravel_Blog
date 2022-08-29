@extends('panel.layouts.app')

@section('content')
    @isset($post)
    @else
        @php
            $post = new stdClass();
        @endphp
    @endisset
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title fs-3 fw-bolder">Yazı İşlemleri</div>
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
                        <div class="fs-6 fw-bold mt-2 mb-3">Başlık</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <input type="text" class="form-control form-control-solid" placeholder="Başlık" name="title" value="{{$post->title ?? ''}}">

                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    @if(Request::route('id') >0)
                        <div class="col-xl-3">
                            <div class="fs-6 fw-bold mt-2 mb-3">Slug</div>
                        </div>
                    @endif

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        @if(Request::route('id') >0)
                        <input type="text" disabled class="form-control form-control-solid" value="{{$post->slug ?? ''}}">
                        @endif
                        <input type="hidden" class="form-control form-control-solid" placeholder="Slug" name="original_slug" value="{{$post->slug ?? ''}}">
                        <input type="hidden" class="form-control form-control-solid" placeholder="Slug" name="slug" value="{{$post->slug ?? ''}}">
                    </div>
                </div>

                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">Kategori Adı</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <select name="category_id" aria-label="Seçiniz" data-control="select2" data-placeholder="Seçiniz.." class="form-select form-select-solid form-select-lg select2-hidden-accessible" data-select2-id="select2-data-16-dtue" tabindex="-1" aria-hidden="true">
                            <option></option>
                            @foreach($categories as $category_list)
                                <option value="{{ $category_list->id }}" {{ $category_list->id == ($post->category_id ?? '') ? 'selected' : '' }}>{{ $category_list->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-8">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-bold mt-2 mb-3">İçerik</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 fv-row">
                        <textarea id="editor" name="text" >{{$post->text ?? ''}}</textarea>
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
@push('page_scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush

