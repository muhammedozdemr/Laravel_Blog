@extends('web.layouts.app')
@section('content')
    <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <h2 class="mb-4">{{$category->name}}</h2>
            @if(count($posts)==0)
                <p>{{ $category->name }} kategorisinde post bulunmuyor.</p>
            @elseif(count($sub_category)==0)
                <p>{{ $category->name }} kategorisinde başka alt kategori bulunmuyor.</p>
            @endif
        </div>
    </div>
    <div class="row">
    <div class="col-lg-8">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="blog-entry ftco-animate">
                        <a href="#" class="img img-2"
                           style="background-image: url(http://via.placeholder.com/350x330?text=Görsel);"></a>
                        <div class="text text-2 pt-2 mt-3">
                            <span class="category mb-3 d-block"><a href="#">{{$post->name ?? 'Ana Kategori'}}</a></span>
                            <h3 class="mb-4"><a href="{{ route('post', $post->slug) }}">{{$post->title}}</a></h3>
                            <p class="mb-4">{!! substr($post->text,0,110) !!}</p>
                            <div class="author mb-4 d-flex align-items-center">
                                <div class="info">
                                    <h3><i class="fa fa-clock" aria-hidden="true"></i>
                                        <span>{{$post->created_at}}</span></h3>
                                </div>
                            </div>
                            <div class="meta-wrap align-items-center">
                                <div class="half">
                                    <p><a href="{{ route('post', $post->slug) }}" class="btn py-2">Devamı <i class="fa fa-angle-right"
                                                                              aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {{$posts->links()}}
        </div><!-- END-->
    </div>
    <div class="col-lg-4 sidebar ftco-animate">
        @if(count($sub_category)>0)
            <div class="sidebar-box ftco-animate">
                <h3 class="sidebar-heading">Alt Kategoriler</h3>
                <ul class="categories">
                    @foreach($sub_category as $sub_category_list)
                        <li><a href="{{ route('category', $sub_category_list->slug) }}">{{$sub_category_list->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div><!-- END COL -->
    </div>
@endsection
@push('page_scripts')
    <script>
        $(".hidden").hide();
    </script>
@endpush
