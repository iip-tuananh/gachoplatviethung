@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
@endsection
@section('content')
<section class="awe-section-1">
   <div class="section_slider home-slider swiper-container evo-width-slider">
         <div class="swiper-wrapper">
            @foreach ($banners as $banner)
            <div class="swiper-slide">
               <a href="{{$banner->link}}" class="clearfix" title="">
                  <picture>
                        <source 
                        media="(min-width: 1200px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 992px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(min-width: 569px)"
                        srcset="{{$banner->image}}">
                        <source 
                        media="(max-width: 480px)"
                        srcset="{{$banner->image}}">
                        <img 
                        width="1808" height="600" src="{{$banner->image}}" 
                        alt="{{$banner->title}}" class="img-responsive center-block d-block mx-auto" />
                  </picture>
               </a>
            </div>
            @endforeach
         </div>
         <div class="swiper-pagination"></div>
   </div>
   <script>
         var swiper = new Swiper('.home-slider', {
            autoplay: {
               delay: 4500,
               disableOnInteraction: false
            },
            pagination: {
               el: '.swiper-pagination',
               clickable: true,
            }
         });
   </script>
</section>
<section class="awe-section-2">
   <div class="section_search_feature container">
      <div class="brand-logo">
         <div class="swiper-wrapper">
            @foreach ($partners as $item)
               <div class="swiper-slide">
                  <img src="{{$item->image}}" alt="{{$item->name}}">
               </div>
            @endforeach
         </div>
      </div>
      <script>
         var swiper = new Swiper('.brand-logo', {
            slidesPerView: 4,
            spaceBetween: 15,
            slidesPerGroup: 1,
            navigation: {
               nextEl: '.evo-sale-controller .swiper-button-next',
               prevEl: '.evo-sale-controller .swiper-button-prev',
            },
            autoplay: true,
            autoHeight: true,
            breakpoints: {
               300: {
                     slidesPerView: 3,
                     spaceBetween: 7,
               },
               500: {
                     slidesPerView: 4,
                     spaceBetween: 10,
               },
               640: {
                     slidesPerView: 4,
                     spaceBetween: 10,
               },
               768: {
                     slidesPerView: 4,
                     spaceBetween: 10,
               },
               1024: {
                     slidesPerView: 5,
                     spaceBetween: 15,
               },
               1200: {
                     slidesPerView: 7,
                     spaceBetween: 10,
               }
            }
         });
      </script>
         {{-- <div class="row">
         <div class="col-lg-3 col-md-6 col-12 item">
            <div class="img">
               <img class="lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_1.svg?1663922909046" alt="Miễn phí vận chuyển" />
            </div>
            <div class="detail">
               <a href="" title="Miễn phí vận chuyển">Miễn phí vận chuyển</a>
               <p>Evo Tools miễn phí vận chuyển với đơn hàng trên 350.000đ</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 item">
            <div class="img">
               <img class="lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_2.svg?1663922909046" alt="Đổi trả trong vòng 7 ngày" />
            </div>
            <div class="detail">
               <a href="" title="Đổi trả trong vòng 7 ngày">Đổi trả trong vòng 7 ngày</a>
               <p>Lỗi là đổi mới trong 1 tháng tận nhà.</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 item">
            <div class="img">
               <img class="lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_3.svg?1663922909046" alt="Bảo hành chính hãng" />
            </div>
            <div class="detail">
               <a href="" title="Bảo hành chính hãng">Bảo hành chính hãng</a>
               <p>Bảo hành chính hãng sản phẩm, có người đến tận nhà</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-12 item">
            <div class="img">
               <img class="lazy" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_search_image_4.svg?1663922909046" alt="Phương thức thanh toán" />
            </div>
            <div class="detail">
               <a href="" title="Phương thức thanh toán">Phương thức thanh toán</a>
               <p>Hỗ trợ thanh toán qua thẻ: Vietcombank, Techcombank, BIDV,...</p>
            </div>
         </div>
         </div> --}}
   </div>
</section>
<section class="awe-section-3">
   <link rel="preload" as="script" href="{{asset('frontend/js/flipclock.js')}}" />
   <script src="{{asset('frontend/js/flipclock.js')}}" type="text/javascript"></script>
   <div class="section_banner">
         <div class="hotdeal-title clearfix">
         <a class="hotdeal-title-a text-uppercase" href="#" title="Giá sốc hàng tuần">Giá sốc hàng tuần</a>
         {{-- <div class="hotdeal-sub-title">Giảm giá đến 70%</div> --}}
         <div class="timer">
            <div class="timer-view">
               <div class="clock"></div>
            </div>
         </div>
         <div class="evo-sale-controller">
            <div class="th-decor">
               <a class="hotdeal-control" href="{{route('listSale')}}" title="Xem tất cả">Xem tất cả</a>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
         </div>
         <div class="hotdeal-content lazy" data-src="{{url('frontend/images/qq.jpg')}}">
         <div class="container">
            <div class="products-view-grid products evo-owl-product swiper-container">
               <div class="swiper-wrapper">
                  @foreach ($homeProductSale as $product)
                     <div class="swiper-slide">
                     @include('layouts.product.item', ['product'=>$product])
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
         </div>
   </div>
   <script>
      //countdown flashsale
      setInterval(function time(){
      var d = new Date();
      var hours = 23 - d.getHours();
      var min = 59 - d.getMinutes();
      if((min + '').length == 1){
         min = '0' + min;
      }
      var sec = 59 - d.getSeconds();
      if((sec + '').length == 1){
            sec = '0' + sec;
      }
      jQuery('.timer-view .clock').html('<span style="width: 30px;">'+hours+'</span> : <span style="width: 40px;">'+min+'</span> : <span style="width: 40px;">'+sec+'</span>')
      }, 1000);
   </script>
   <script type="text/javascript">
         var swiper = new Swiper('.evo-owl-product', {
            slidesPerView: 4,
            spaceBetween: 15,
            slidesPerGroup: 2,
            navigation: {
               nextEl: '.evo-sale-controller .swiper-button-next',
               prevEl: '.evo-sale-controller .swiper-button-prev',
            },
            autoHeight: true,
            breakpoints: {
               300: {
                     slidesPerView: 2,
                     spaceBetween: 7,
               },
               500: {
                     slidesPerView: 2,
                     spaceBetween: 10,
               },
               640: {
                     slidesPerView: 2,
                     spaceBetween: 10,
               },
               768: {
                     slidesPerView: 3,
                     spaceBetween: 10,
               },
               1024: {
                     slidesPerView: 4,
                     spaceBetween: 15,
               },
               1200: {
                     slidesPerView: 5,
                     spaceBetween: 15,
               }
            }
         });
   </script>
</section>
@foreach ($categoryhome as $cate)
@if (count($cate->product) > 0)
<section class="awe-section-4">
   <div class="container evo_block-product evo_block-product-color-1">
         <div class="e-tabs not-dqtab ajax-tab-{{$cate->id}}">
         <div class="content">
            <div class="titlecp clearfix">
               <h3 class="text-uppercase">{{languageName($cate->name)}}</h3>
               <span class="hidden-md hidden-lg button_show_tab">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </span>
               @if (count($cate->typeCate) > 0)
               <ul class="tabs tabs-title tab-desktop ajax clearfix evo-close">
                  @foreach ($cate->typeCate as $key=>$type)
                     @if ($key == 0)
                        <li class="tab-link-{{$cate->id}} tab-link has-content current" data-tab="{{$type->id}}" data-cate="{{$cate->id}}" data-url="{{route('getProductTabHome')}}">
                        <span title="{{languageName($type->name)}}">{{languageName($type->name)}}</span>
                        </li>
                     @else
                     <li class="tab-link-{{$cate->id}} tab-link has-content" data-tab="{{$type->id}}" data-cate="{{$cate->id}}" data-url="{{route('getProductTabHome')}}">
                        <span title="{{languageName($type->name)}}">{{languageName($type->name)}}</span>
                        </li>
                     @endif
                  @endforeach
               </ul>
               @endif
            </div>
            <div class="tab-content-{{$cate->id}} tab-content current">
               <div class="evo-owl-product2 swiper-container products-view-grid">
                     <div class="swiper-wrapper">
                        @foreach ($cate->product as $product)
                           <div class="swiper-slide">
                              @include('layouts.product.item', ['product'=>$product])
                           </div>
                        @endforeach
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section>
@endif
@endforeach
<script>
   $('.tab-link').click(function(e) {
      e.preventDefault();
      var id = $(this).data('tab');
      var cate = $(this).data('cate');
      var url = $(this).data('url');
      $('.tab-link-'+cate).removeClass('current');
      $(this).addClass('current');
      $.ajax({
         type: 'post',
         url: url,
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {id:id, cate_id :cate},
         success: function(data){
            $('.tab-content-'+cate).html(data.html);
            var swiper = new Swiper('.evo-owl-product2', {
            slidesPerView: 5,
            spaceBetween: 15,
            slidesPerGroup: 2,
            navigation: {
               nextEl: '.evo_block-product-color-1 .swiper-button-next',
               prevEl: '.evo_block-product-color-1 .swiper-button-prev',
            },
            breakpoints: {
               300: {
                  slidesPerView: 2,
                  spaceBetween: 7,
               },
               500: {
                  slidesPerView: 2,
                  spaceBetween: 10,
               },
               640: {
                  slidesPerView: 2,
                  spaceBetween: 10,
               },
               768: {
                  slidesPerView: 3,
                  spaceBetween: 10,
               },
               1024: {
                  slidesPerView: 4,
                  spaceBetween: 15,
               },
               1200: {
                  slidesPerView: 5,
                  spaceBetween: 15,
               }
            }
            });
            $(document).ready(function ($) {
            awe_lazyloadImage();
            });
            function awe_lazyloadImage() {
                  var ll = new LazyLoad({
                     elements_selector: ".lazy",
                     load_delay: 100,
                     threshold: 0
                  });
            } window.awe_lazyloadImage=awe_lazyloadImage;
         },
         error: function(data) {
            $('.tab-content-'+cate).html('<div class="alert alert-success alert-dismissible fade in show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Nội dung đang cập nhật.	</div>');
         }
      })
   })
</script>
{{-- <section class="awe-section-5">
   <div class="container section_banner_evo">
         <div class="row">
         <div class="col-md-6 col-12">
            <a href="/collections/all" title="Evo Tools">
            <img width="680" height="226" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_banner_1.jpg?1663922909046" alt="Evo Tools" />
            </a>
         </div>
         <div class="col-md-6 col-12">
            <a href="/collections/all" title="Evo Tools">
            <img width="680" height="226" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/feature_banner_2.jpg?1663922909046" alt="Evo Tools" />
            </a>
         </div>
         </div>
   </div>
</section>
<section class="awe-section-6">
   <div class="evo_block-product evo_block-product-color-2">
         <div class="container">
         <div class="row">
            <div class="col-lg-3 fix-width-left">
               <div class="evo-left-cate lazy" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/evo_block_product_banner_2.jpg?1663922909046">
                     <div class="title">
                     Máy cầm tay điện
                     </div>
                     <div class="menu-left">
                     <a href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a>
                     <a href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a>
                     <a href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a>
                     <a href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a>
                     <a href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a>
                     </div>
                     <div class="viewmore">
                     <a href="san-pham-moi" title="Xem tất cả">Xem tất cả</a>
                     </div>
               </div>
            </div>
            <div class="col-lg-9 fix-width-right">
               <div class="e-tabs not-dqtab ajax-tab-2" data-section="ajax-tab-2">
                     <ul class="tabs tabs-title tab-desktop ajax clearfix evo-close">
                     <li class="tab-link has-content" data-tab="tab-1" data-url="/san-pham-moi">
                        <span title="Sản phẩm mới">Sản phẩm mới</span>
                     </li>
                     <li class="tab-link " data-tab="tab-2" data-url="/may-cam-tay-dien">
                        <span title="Máy cầm tay điện">Máy cầm tay điện</span>
                     </li>
                     <li class="tab-link " data-tab="tab-3" data-url="/may-cam-tay-pin">
                        <span title="Máy cầm tay pin">Máy cầm tay pin</span>
                     </li>
                     </ul>
                     <div class="tab-1 tab-content">
                     <div class="evo-owl-product3 swiper-container products-view-grid">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <strong> 40% </strong>
                                    <a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR" class="title">Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">3.890.000₫</strong>
                                       <span class="product-old-price">6.450.000₫</span>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884651">
                                       <input type="hidden" name="variantId" value="42790185" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">3.580.000₫</strong>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884647">
                                       <input type="hidden" name="variantId" value="42790158" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <strong> 49% </strong>
                                    <a class="thumb-img" href="/may-khoan-cam-tay-20v-dewalt-dch273b" title="Máy khoan c&#7847;m tay 20V Dewalt DCH273B">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/5b2c3c4487c73887def8c8ed1a8351ad.png?v=1615383381787" alt="Máy khoan c&#7847;m tay 20V Dewalt DCH273B" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-cam-tay-20v-dewalt-dch273b" title="Máy khoan c&#7847;m tay 20V Dewalt DCH273B" class="title">Máy khoan c&#7847;m tay 20V Dewalt DCH273B</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">4.200.000₫</strong>
                                       <span class="product-old-price">8.200.000₫</span>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884644">
                                       <input type="hidden" name="variantId" value="42790153" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <a class="thumb-img" href="/may-khoan-bua-dewalt-d25033k-22mm" title="Máy Khoan Búa DeWalt D25033K (22mm)">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/1-u5463-d20170927-t091215-269856.jpg?v=1615383271467" alt="Máy Khoan Búa DeWalt D25033K (22mm)" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-bua-dewalt-d25033k-22mm" title="Máy Khoan Búa DeWalt D25033K (22mm)" class="title">Máy Khoan Búa DeWalt D25033K (22mm)</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">2.550.000₫</strong>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884640">
                                       <input type="hidden" name="variantId" value="42790136" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <strong> 33% </strong>
                                    <a class="thumb-img" href="/may-khoan-pin-18v-dewalt-dcd796m2" title="Máy khoan pin 18V Dewalt DCD796M2">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f594d9bab6b5ac6e76441dd2e44d3e76.jpg?v=1615383110970" alt="Máy khoan pin 18V Dewalt DCD796M2" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-pin-18v-dewalt-dcd796m2" title="Máy khoan pin 18V Dewalt DCD796M2" class="title">Máy khoan pin 18V Dewalt DCD796M2</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">4.790.000₫</strong>
                                       <span class="product-old-price">7.110.000₫</span>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884634">
                                       <input type="hidden" name="variantId" value="42790128" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="tab-2 tab-content">
                     </div>
                     <div class="tab-3 tab-content">
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section>
<section class="awe-section-7">
   <div class="evo_block-product evo_block-product-color-2">
         <div class="container">
         <div class="row">
            <div class="col-lg-3 fix-width-left">
               <div class="evo-left-cate lazy" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/evo_block_product_banner_3.jpg?1663922909046">
                     <div class="title">
                     Làm mộc làm vườn
                     </div>
                     <div class="menu-left">
                     <a href="/san-pham-moi" title="Sản phẩm mới">Sản phẩm mới</a>
                     <a href="/may-cam-tay-dien" title="Máy cầm tay điện">Máy cầm tay điện</a>
                     <a href="/may-cam-tay-pin" title="Máy cầm tay pin">Máy cầm tay pin</a>
                     <a href="/phu-kien-may-moc" title="Phụ kiện máy móc">Phụ kiện máy móc</a>
                     <a href="/co-khi-dien-nuoc" title="Cơ khí điện nước">Cơ khí điện nước</a>
                     <a href="/lam-moc-lam-vuon" title="Làm mộc làm vườn">Làm mộc làm vườn</a>
                     </div>
                     <div class="viewmore">
                     <a href="san-pham-moi" title="Xem tất cả">Xem tất cả</a>
                     </div>
               </div>
            </div>
            <div class="col-lg-9 fix-width-right">
               <div class="e-tabs not-dqtab ajax-tab-3" data-section="ajax-tab-3">
                     <ul class="tabs tabs-title tab-desktop ajax clearfix evo-close">
                     <li class="tab-link has-content" data-tab="tab-1" data-url="/san-pham-moi">
                        <span title="Sản phẩm mới">Sản phẩm mới</span>
                     </li>
                     <li class="tab-link " data-tab="tab-2" data-url="/may-cam-tay-dien">
                        <span title="Máy cầm tay điện">Máy cầm tay điện</span>
                     </li>
                     <li class="tab-link " data-tab="tab-3" data-url="/may-cam-tay-pin">
                        <span title="Máy cầm tay pin">Máy cầm tay pin</span>
                     </li>
                     </ul>
                     <div class="tab-1 tab-content">
                     <div class="evo-owl-product3 swiper-container products-view-grid">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <strong> 40% </strong>
                                    <a class="thumb-img" href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f7b94e099a215a91f13b4db56c76c065.jpg?v=1615383647320" alt="Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-cua-cam-tay-18v-dewalt-dcs391n-kr" title="Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR" class="title">Máy cưa c&#7847;m tay 18V DeWalt DCS391N-KR</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">3.890.000₫</strong>
                                       <span class="product-old-price">6.450.000₫</span>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884651">
                                       <input type="hidden" name="variantId" value="42790185" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <a class="thumb-img" href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/2a3c3d5b1e80166ae6d1b1ec2744bf36.jpg?v=1615383533630" alt="Máy khoan DEW37300001470" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-dew37300001470" title="Máy khoan DEW37300001470" class="title">Máy khoan DEW37300001470</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">3.580.000₫</strong>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884647">
                                       <input type="hidden" name="variantId" value="42790158" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <strong> 49% </strong>
                                    <a class="thumb-img" href="/may-khoan-cam-tay-20v-dewalt-dch273b" title="Máy khoan c&#7847;m tay 20V Dewalt DCH273B">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/5b2c3c4487c73887def8c8ed1a8351ad.png?v=1615383381787" alt="Máy khoan c&#7847;m tay 20V Dewalt DCH273B" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-cam-tay-20v-dewalt-dch273b" title="Máy khoan c&#7847;m tay 20V Dewalt DCH273B" class="title">Máy khoan c&#7847;m tay 20V Dewalt DCH273B</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">4.200.000₫</strong>
                                       <span class="product-old-price">8.200.000₫</span>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884644">
                                       <input type="hidden" name="variantId" value="42790153" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <a class="thumb-img" href="/may-khoan-bua-dewalt-d25033k-22mm" title="Máy Khoan Búa DeWalt D25033K (22mm)">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/1-u5463-d20170927-t091215-269856.jpg?v=1615383271467" alt="Máy Khoan Búa DeWalt D25033K (22mm)" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-bua-dewalt-d25033k-22mm" title="Máy Khoan Búa DeWalt D25033K (22mm)" class="title">Máy Khoan Búa DeWalt D25033K (22mm)</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">2.550.000₫</strong>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884640">
                                       <input type="hidden" name="variantId" value="42790136" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                           <div class="swiper-slide">
                                 <div class="evo-product-item">
                                 <div class="thumb-evo">
                                    <strong> 33% </strong>
                                    <a class="thumb-img" href="/may-khoan-pin-18v-dewalt-dcd796m2" title="Máy khoan pin 18V Dewalt DCD796M2">
                                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/418/839/products/f594d9bab6b5ac6e76441dd2e44d3e76.jpg?v=1615383110970" alt="Máy khoan pin 18V Dewalt DCD796M2" />
                                    </a>
                                 </div>
                                 <div class="pro-brand">
                                    <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
                                 </div>
                                 <a href="/may-khoan-pin-18v-dewalt-dcd796m2" title="Máy khoan pin 18V Dewalt DCD796M2" class="title">Máy khoan pin 18V Dewalt DCD796M2</a>
                                 <div class="flex-prices">
                                    <div class="block-prices">
                                       <strong class="product-price">4.790.000₫</strong>
                                       <span class="product-old-price">7.110.000₫</span>
                                    </div>
                                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884634">
                                       <input type="hidden" name="variantId" value="42790128" />
                                       <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                             <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
                                             </svg>
                                       </button>
                                    </form>
                                 </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="tab-2 tab-content">
                     </div>
                     <div class="tab-3 tab-content">
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section> --}}
@if (isset($bannerNho))
<section class="awe-section-8">
   <div class="container section_banner_evo_2">
         <a href="{{$bannerNho->link}}" title="{{$bannerNho->title}}">
         <img width="1920" height="432" class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$bannerNho->image}}" alt="{{$bannerNho->title}}" />
         </a>
   </div>
</section>
@endif
@foreach ($blogCate as $cate)
   @if (count($cate->listBlog) > 0)
   <section class="awe-section-9">
      <div class="section_news container">
            <div class="news-title">
            <div class="title text-uppercase">
               {{languageName($cate->name)}}
            </div>
            <ul class="news-menu">
               @foreach ($cate->typeCate as $type)
               <li><a href="{{route('listTypeBlog', ['slug'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a></li>
               @endforeach
            </ul>
            </div>
            <div class="news-content row">
               @foreach ($cate->listBlog as $blog)
               <div class="col-lg-3 col-sm-6 col-9">
                  <div class="evo-news-item">
                     <div class="item-img">
                           <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                           <img width="480" height="320" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazy img-responsive center-block" />
                           </a>
                     </div>
                     <div class="item-img-content">
                           <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                           <p class="desc">
                           {{languageName($blog->description)}}
                           </p>
                           <div class="evo-author">
                           <span><img width="16" height="16" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMS45OTkgNTExLjk5OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDAwLjU3NCwzNjIuNjEzbDU0LjEyOC0xNjguOTY4bDUyLjkwNS01Mi45MDZjNS44NTgtNS44NTgsNS44NTgtMTUuMzU1LDAtMjEuMjEzTDM5Mi40NzQsNC4zOTQgICAgYy01Ljg1Ny01Ljg1OC0xNS4zNTUtNS44NTgtMjEuMjEzLDBsLTUyLjkwNiw1Mi45MDVsLTE2OC45NjgsNTQuMTI4Yy00LjM3MiwxLjQwMS03Ljg2Miw0LjcyNy05LjQ3Miw5LjAyN0wwLjk1NSw0OTEuNzQxICAgIGMtMy42MTcsOS42NzEsMy40NjgsMjAuMjU4LDE0LjA1MSwyMC4yNThjMC4wMDQsMCwwLjAwNywwLDAuMDExLDBoNDQ4LjgwOGM4LjI4NCwwLDE1LTYuNzE2LDE1LTE1YzAtOC4yODQtNi43MTYtMTUtMTUtMTVIOTcuODczICAgIGwyOTMuNjcyLTEwOS45MTJDMzk1Ljg0NywzNzAuNDc2LDM5OS4xNzMsMzY2Ljk4Niw0MDAuNTc0LDM2Mi42MTN6IE0zODEuODY3LDM2LjIxNGw5My45Miw5My45MTlsLTM0LjI2MywzNC4yNjNsLTkzLjkyLTkzLjkyICAgIEwzODEuODY3LDM2LjIxNHogTTc0LjUsNDU4LjcxNGwxMzYuMzYtMTM2LjM1OWMyNS4xNTgsMTUuNDg2LDU4LjMwOCwxMi4xMzgsNzkuOC05LjM1NGMyNS4zMy0yNS4zMywyNS4zMzEtNjYuMzI3LDAtOTEuNjU3ICAgIGMtMjUuMjcxLTI1LjI3LTY2LjM4OC0yNS4yNzEtOTEuNjU3LDBjLTIxLjgxOSwyMS44Mi0yNC42OTcsNTUuMDIzLTkuMzY5LDc5LjgxNUw1My4yODcsNDM3LjUwMmwxMTIuMTc3LTI5OS43MjNsMTU2Ljc5MS01MC4yMjcgICAgYzE1LjY0NSwxNS42NDYsOTIuNDEzLDkyLjQxNCwxMDIuMTkzLDEwMi4xOTRsLTUwLjIyNywxNTYuNzkxTDc0LjUsNDU4LjcxNHogTTIyMC4yMTQsMjQyLjU1NiAgICBjMTMuNTczLTEzLjU3MiwzNS42NTgtMTMuNTc0LDQ5LjIzMiwwYzEzLjYwNCwxMy42MDMsMTMuNjA2LDM1LjYyNSwwLDQ5LjIzMWMtMTMuNTcyLDEzLjU3NC0zNS42NTgsMTMuNTczLTQ5LjIzMiwwICAgIEMyMDYuNjEsMjc4LjE4MywyMDYuNjA3LDI1Ni4xNjMsMjIwLjIxNCwyNDIuNTU2eiIgZmlsbD0iIzZjNzU3ZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" alt="Evo Tools" /> {{languageName($blog->cate->name)}}</span>
                           <span><img width="16" height="16" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTQ1Miw0MGgtMjRWMGgtNDB2NDBIMTI0VjBIODR2NDBINjBDMjYuOTE2LDQwLDAsNjYuOTE2LDAsMTAwdjM1MmMwLDMzLjA4NCwyNi45MTYsNjAsNjAsNjBoMzkyICAgIGMzMy4wODQsMCw2MC0yNi45MTYsNjAtNjBWMTAwQzUxMiw2Ni45MTYsNDg1LjA4NCw0MCw0NTIsNDB6IE00NzIsNDUyYzAsMTEuMDI4LTguOTcyLDIwLTIwLDIwSDYwYy0xMS4wMjgsMC0yMC04Ljk3Mi0yMC0yMFYxODggICAgaDQzMlY0NTJ6IE00NzIsMTQ4SDQwdi00OGMwLTExLjAyOCw4Ljk3Mi0yMCwyMC0yMGgyNHY0MGg0MFY4MGgyNjR2NDBoNDBWODBoMjRjMTEuMDI4LDAsMjAsOC45NzIsMjAsMjBWMTQ4eiIgZmlsbD0iIzZjNzU3ZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cmVjdCB4PSI3NiIgeT0iMjMwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM2Yzc1N2QiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHJlY3QgeD0iMTU2IiB5PSIyMzAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgZmlsbD0iIzZjNzU3ZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cmVjdCB4PSIyMzYiIHk9IjIzMCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBmaWxsPSIjNmM3NTdkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxyZWN0IHg9IjMxNiIgeT0iMjMwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM2Yzc1N2QiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHJlY3QgeD0iMzk2IiB5PSIyMzAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgZmlsbD0iIzZjNzU3ZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cmVjdCB4PSI3NiIgeT0iMzEwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM2Yzc1N2QiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHJlY3QgeD0iMTU2IiB5PSIzMTAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgZmlsbD0iIzZjNzU3ZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cmVjdCB4PSIyMzYiIHk9IjMxMCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBmaWxsPSIjNmM3NTdkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxyZWN0IHg9IjMxNiIgeT0iMzEwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM2Yzc1N2QiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHJlY3QgeD0iNzYiIHk9IjM5MCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBmaWxsPSIjNmM3NTdkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxyZWN0IHg9IjE1NiIgeT0iMzkwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM2Yzc1N2QiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHJlY3QgeD0iMjM2IiB5PSIzOTAiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgZmlsbD0iIzZjNzU3ZCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9yZWN0PgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cmVjdCB4PSIzMTYiIHk9IjM5MCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBmaWxsPSIjNmM3NTdkIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3JlY3Q+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxyZWN0IHg9IjM5NiIgeT0iMzEwIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIGZpbGw9IiM2Yzc1N2QiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcmVjdD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" alt="" /> {{date('d/m/Y', strtotime($blog->created_at))}}</span>
                           </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
      </div>
   </section>
   @endif
@endforeach
@endsection