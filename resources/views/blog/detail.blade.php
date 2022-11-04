@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/evo-article.scss.css')}}" />
<link href="{{asset('frontend/css/evo-article.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
	<div class="container">
	<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
		<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="/" title="Trang chủ">
				<span itemprop="name">Trang chủ</span>
				<meta itemprop="position" content="1" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" title="{{languageName($blog_detail->cate->name)}}">
				<span itemprop="name">{{languageName($blog_detail->cate->name)}}</span>
				<meta itemprop="position" content="2" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<strong itemprop="name">{{languageName($blog_detail->title)}}</strong>
			<meta itemprop="position" content="3" />
		</li>
	</ul>
	</div>
</section>
<div class="container article-wraper">
	<article class="article-main" itemscope itemtype="http://schema.org/Article">
	<div class="row">
		<div class="col-md-12 col-lg-9 col-sm-12">
			<div class="evo-article margin-bottom-10">
				<h1 class="title-head text-center">{{languageName($blog_detail->title)}}</h1>
				<div class="blog-item-author text-center">
				<span>{{languageName($blog_detail->cate->name)}}</span>
				<span> Tháng {{date('m', strtotime($blog_detail->created_at))}}, {{date('Y', strtotime($blog_detail->created_at))}}</span>
				</div>
				<div class="article-details evo-toc-content">
					{!!languageName($blog_detail->content)!!}
				</div>
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
	</article>
</div>
@endsection