@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/evo-blogs.scss.css')}}" />
<link href="{{asset('frontend/css/evo-blogs.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
   <div class="container">
      <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
         <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="{{route('home')}}" title="Trang chủ">
               <span itemprop="name">Trang chủ</span>
               <meta itemprop="position" content="1" />
            </a>
         </li>
         <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <strong itemprop="name">{{$title_page}}</strong>
            <meta itemprop="position" content="2" />
         </li>
      </ul>
   </div>
</section>
<div class="container blog-padding" itemscope itemtype="http://schema.org/Blog">
   <div class="row">
      <div class="col-md-8 col-lg-9 col-sm-12 evo-list-blog-page">
         <h1 class="title-head text-center d-none">{{$title_page}}</h1>
         <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-6 col-md-6 col-sm-12 evo-blog-item">
               <div class="blog-item-image">
                  <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazy img-responsive center-block" />
                  </a>
               </div>
               <div class="blog-item-author">
                  <h3>
                     <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                  </h3>
                  <p class="desc">
                     {{languageName($blog->description)}}
                  </p>
                  <span> Tháng {{date('m', strtotime($blog->created_at))}}, {{date('Y', strtotime($blog->created_at))}}</span>
               </div>
            </div>
            @endforeach
         </div>
         <div class="text-xs-right text-center pagging-css margin-top-20">
            <nav class="text-center">
               {{$blogs->links()}}
            </nav>
         </div>
      </div>
      <div class="col-md-4 col-lg-3 col-sm-12 blog-sidebar">
         <div class="aside-title">Danh mục</div>
         <ul class="navbar-pills nav-category">
            {{-- <li class="nav-item ">
               <a class="nav-link" href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a>
            </li> --}}
            @foreach ($categoryhome as $cate)
            <li class="nav-item ">
               <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" class="nav-link" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
               <span class="Collapsible__Plus"></span>
               <ul class="dropdown-menu">
                  @foreach ($cate->typeCate as $type)
                  <li class="nav-item ">
                     <a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                  </li>
                  @endforeach
               </ul>
            </li>
            @endforeach
            @foreach ($blogCate as $cate)
            <li class="nav-item ">
               <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" class="nav-link" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
               <span class="Collapsible__Plus"></span>
               <ul class="dropdown-menu">
                  @foreach ($cate->typeCate as $type)
                  <li class="nav-item ">
                     <a class="nav-link" href="{{route('listTypeBlog', ['slug'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                  </li>
                  @endforeach
               </ul>
            </li>
            @endforeach
         </ul>
         <div class="aside-title margin-top-20"><a href="#" title="Bài viết nổi bật">Bài viết nổi bật</a></div>
         <div class="evo-list-blogs clearfix">
            @foreach ($hotBlogs as $blog)
            <article class="has-post-thumbnail clearfix">
               <div class="qodef-e-media-image">
                  <a class="thumb" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazy img-responsive mx-auto d-block" />
                  </a>
               </div>
               <div class="qodef-e-content">
                  <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
               </div>
            </article>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endsection