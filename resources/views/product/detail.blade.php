@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$imgColor = json_decode($product->size);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
$discount = $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/evo-products.scss.css')}}" />
<link href="{{asset('frontend/css/evo-products.scss.css')}}" rel="stylesheet" type="text/css" />
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
            <a itemprop="item" href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}" title="{{languageName($product->cate->name)}}">
               <span itemprop="name">{{languageName($product->cate->name)}}</span>
               <meta itemprop="position" content="2" />
            </a>
         </li>
         <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <strong>
               <span itemprop="name">{{languageName($product->name)}}</span>
               <meta itemprop="position" content="3" />
            </strong>
         </li>
      </ul>
   </div>
</section>
<section class="product product-margin" itemscope itemtype="http://schema.org/Product">
   <div class="container">
      <div class="details-product product-bottom row">
         <div class="col-xl-5 col-lg-7 col-md-6 col-sm-12 col-12">
            <div class="product-image-block relative">
               <div class="swiper-container gallery-top">
                  <div class="swiper-wrapper" id="lightgallery">
                     @foreach ($imgs as $key=>$img)
                     <a class="swiper-slide" data-hash="{{$key}}" href="{{$img}}" title="Click để xem">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" class="img-responsive mx-auto d-block swiper-lazy" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                     </a>
                     @endforeach
                  </div>
               </div>
               <div class="swiper-container gallery-thumbs">
                  <div class="swiper-wrapper">
                     @foreach ($imgs as $key=>$img)
                     <div class="swiper-slide" data-hash="{{$key}}">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" class="swiper-lazy" />
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                     </div>
                     @endforeach
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
         <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
            <div class="details-pro">
               <div class="product-top clearfix">
                  <h1 class="title-head">{{languageName($product->name)}}</h1>
                  <div class="sku-product clearfix">
                     {{-- <span>Thương hiệu: <strong>Wesco</strong></span> --}}
                     <span class="variant-sku">Mã sản phẩm: <strong>{{$product->sku}}</strong></span>
                  </div>
               </div>
               <div>
                  <div class="inventory_quantity d-none">
                     <span class="a-stock a2">Còn hàng</span>
                  </div>
                  <div class="price-box clearfix">
                  @if ($product->price > 0 && $product->discount > 0)
                        <span class="special-price">
                        <span class="price product-price">{{number_format($priceDiscount, 0,'','.')}}₫</span>
                        </span> <!-- Giá Khuyến mại -->
                        <span class="old-price">
                        Giá thị trường:
                        <del class="price product-price-old">
                           {{number_format($product->price, 0,'','.')}}₫
                        </del>
                        </span> <!-- Giás gốc -->
                        <span class="save-price">Tiết kiệm:
                        <span class="price product-price-save">{{number_format($discount, 0,'','.')}}₫</span>
                        </span> <!-- Tiết kiệm -->
                  @elseif($product->price > 0 && $product->discount == 0)
                        <span class="special-price">
                        <span class="price product-price">{{number_format($product->price, 0,'','.')}}₫</span>
                        </span> <!-- Giá Khuyến mại -->
                  @else
                        <span class="special-price">
                           <span class="price product-price">Liên hệ</span>
                        </span> <!-- Giá Khuyến mại -->
                  @endif
                  </div>
               </div>
               <div class="coupon-hover">
                  {{-- <div class="c-title"></div> --}}
                  <div class="mini-coupon">
                     <div class="voucher-ticket">
                        Thông tin khuyến mại sản phẩm
                     </div>
                  </div>
                  <div class="evo-coupon">
                     @foreach (json_decode($product->preserve) as $item)
                     <div class="item-coupon">
                        <div class="coupon-content">{{$item->detail}}</div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="evo-specifications">
                  <div class="evo-flex-content has-padding">
                     <div class="content">
                        {!!languageName($product->description)!!}
                     </div>
                     <div class="view-more-evo" onclick="scrollToxxs();">Xem thêm</div>
                  </div>
               </div>
               <div class="form-product">
                  <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="clearfix">
                     <div class="box-variant clearfix  d-none ">
                        <input type="hidden" id="one_variant" name="variantId" value="41705628" />
                     </div>
                     <div class="form-groups evo-btn-cart clearfix ">
                        <div class="qty-ant clearfix custom-btn-number ">
                           <label>Số lượng:</label>
                           <div class="custom custom-btn-numbers clearfix">		
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
                              <input aria-label="Số lượng" type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;" autocomplete="off" />
                              <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
                           </div>
                        </div>
                        <div class="btn-mua">
                           <input type="hidden" name="variantId" value="{{$product->id}}" />
                           <button type="submit" data-role='addtocart' class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">Thêm vào giỏ</button>
                           <button type="button" class="btn btn-buy-now">Mua ngay</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   @if (count($productlq) > 1)
   <div class="related-product">
      <div class="container">
         <div class="home-title"><a href="#" title="Sản phẩm liên quan">Sản phẩm liên quan</a></div>
         <div class="evo-owl-product swiper-container">
            <div class="swiper-wrapper">
               @foreach ($productlq as $pro)
               @if ($pro->id != $product->id)
               <div class="swiper-slide">
                  @include('layouts.product.item', ['product'=>$pro])
               </div>
               @endif
               @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </div>
   @endif
   <div class="container" id="evo-product-content-block">
      <div class="row">
         <div class="col-lg-8 col-md-12 col-sm-12 col-12 evo-product-tabs margin-bottom-15">
            <h4 class="evo-product-tabs-title">Thông tin sản phẩm</h4>
            <div class="evo-product-tabs-content">
               {!!languageName($product->content)!!}
            </div>
            <div class="show-more">
               <a class="btn btn-default btn--view-more">
               <span class="more-text">Xem thêm<i class="icon-double-arrow down"></i></span>
               <span class="less-text"><i class="icon-double-arrow up"></i>Thu gọn</span>
               </a>
            </div>
         </div>
         <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="evo-product-news">
               <div class="aside-title">Bạn đang xem</div>
               <div class="group-img-and-title">
                  <img class="pict imagelazyload" src="{{$imgs[0]}}" alt="{{languageName($product->name)}}" />
                  <div class="product_info_name" title="{{languageName($product->name)}}">{{languageName($product->name)}}</div>
               </div>
               <div class="product_info_price">
                  <div class="product_info_price_title">
                     Giá bán:
                  </div>
                  <div class="product_info_price_value 3">
                     @if ($product->price > 0 && $product->discount > 0)
                     <div class="product_info_price_value-final">{{number_format($priceDiscount, 0,'','.')}}₫</div>
                     <div class="product_info_compare_price_value-final">{{number_format($product->price, 0,'','.')}}₫</div>
                     @elseif($product->price > 0 && $product->discount == 0)
                     <div class="product_info_price_value-final">{{number_format($product->price, 0,'','.')}}₫</div>
                     @else
                     <div class="product_info_price_value-final"><a href="tel:{{$setting->phone1}}"></a>Liên hệ</div>
                     @endif
                  </div>
               </div>
               <div class="product_info_buttons ">
                  <input type="hidden" name="variantId" value="{{$product->id}}" />
                  <button class="btn btn_buyNow btn-buy-now-click">Thêm vào giỏ</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="product-gray product_recent product-page-viewed">
   </div>
</section>
<script>
   var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 5,
      slidesPerView: 10,
      lazy: true,
      hashNavigation: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      direction: 'vertical',
      loop: false,
      loopAdditionalSlides: 0,
      breakpoints: {
         300: {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'horizontal',
         },
         500: {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'horizontal',
         },
         640: {
            slidesPerView: 5,
            spaceBetween: 10,
            direction: 'horizontal',
         },
         768: {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'horizontal',
         },
         1024: {
            slidesPerView: 5,
            spaceBetween: 10,
         },
      },
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
      },
   });
   var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 0,
      lazy: true,
      hashNavigation: true,
      thumbs: {
         swiper: galleryThumbs
      }
   });
   function scrollToxxs() {
      $('html, body').animate({ scrollTop: $('#evo-product-content-block').offset().top }, 'slow');
      return false;
   }
   jQuery(function($) {
      $('.selector-wrapper').hide();
      
      $('.selector-wrapper').css({
         'text-align':'left',
         'margin-bottom':'15px'
      });
   });
   jQuery('.swatch :radio').change(function() {
      var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
      var optionValue = jQuery(this).val();
      jQuery(this)
         .closest('form')
         .find('.single-option-selector')
         .eq(optionIndex)
         .val(optionValue)
         .trigger('change');
   });
   $('.btn--view-more').on('click', function(e){
      e.preventDefault();
      var $this = $(this);
      $this.parents('.evo-product-tabs').find('.evo-product-tabs-content').toggleClass('expanded');
      $(this).toggleClass('active');
      $('html, body').animate({ scrollTop: $('.evo-product-tabs').offset().top }, 'fast');
      return false;
   });
   $(document).on('click', '.btn-buy-now-click', function(e) {
      e.preventDefault();
      $('[data-role=addtocart]').click();
   });
   
   var swiper = new Swiper('.evo-owl-product', {
      slidesPerView: 4,
      spaceBetween: 15,
      slidesPerGroup: 2,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
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
            slidesPerView: 4,
            spaceBetween: 10,
         },
         1024: {
            slidesPerView: 5,
            spaceBetween: 15,
         },
      }
   });
   
   jQuery(document).ready(function($){
      orientationChange();
   });
   function orientationChange() {
      if(window.addEventListener) {
         window.addEventListener("orientationchange", function() {
            location.reload();
         });
      }
   }
</script>
<div class="product-recommend-module-box" style="display: none;">
   <style>
      #owl-product-recommend .item {
      margin: 3px;
      }
      #owl-product-recommend .item img {
      display: block;
      width: 50%;
      height: auto;
      margin: 0 auto;
      }
   </style>
</div>
@endsection