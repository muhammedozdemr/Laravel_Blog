@extends('web.layouts.app')
@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-entry ftco-animate">
                        <a href="#" class="img" style="background-image: url(http://via.placeholder.com/350x330?text=Görsel);"></a>
                        <div class="text pt-2 mt-3">
                            <span class="category mb-1 d-block"><a href="#">{{$post->name ?? 'Ana Kategori'}}</a></span>
                            <h3 class="mb-4"><a href="#">{{$post->title}}</a></h3>
                            <p class="mb-4">{!! $post->text !!}</p>
                            <div class="author mb-4 d-flex align-items-center">
                                <div class="info">
                                    <h3><i class="fa fa-clock" aria-hidden="true"></i><span> {{$post->created_at}}</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
