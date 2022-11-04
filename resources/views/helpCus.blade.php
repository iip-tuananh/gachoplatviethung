@extends('layouts.main.master')
@section('title')
{{$helpCus->title}}
@endsection
@section('description')
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/evo-pages.scss.css')}}" />
<link href="{{asset('frontend/css/evo-pages.scss.css')}}" rel="stylesheet" type="text/css" />
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
            <strong itemprop="name">{{$helpCus->title}}</strong>
            <meta itemprop="position" content="2" />
        </li>
    </ul>
    </div>
</section>
<section class="evo-page-static page margin-top-20 margin-bottom-20">
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="page-title category-title">
                <h1 class="title-head title-page">{{$helpCus->title}}</h1>
            </div>
            <div class="content-page rte">
                @if ($helpCus->content != '')
                {!!$helpCus->content!!}
                @else
                <div class="alert alert-success alert-dismissible fade in show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                Nội dung đang cập nhật.	
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
</section>
@endsection