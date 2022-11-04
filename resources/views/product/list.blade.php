@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/evo-collections.scss.css')}}" />
<link href="{{asset('frontend/css/evo-collections.scss.css')}}" rel="stylesheet" type="text/css" />
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
            <strong>
               <span itemprop="name">Máy cầm tay điện</span>
               <meta itemprop="position" content="2" />
            </strong>
         </li>
      </ul>
   </div>
</section>
<div class="container">
   <div class="main_container collection margin-bottom-5">
      <h1 class="col-title">Máy cầm tay điện</h1>
      {{-- <div class="evo-col-banner lazy" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/cate_slider_1.jpg?1663922909046">
         <div class="content-left-banner">
            <div class="big-title">
               Dụng cụ sửa chữa Bosch
            </div>
            <div class="small-title">
               Giảm đến 50%
            </div>
         </div>
         <div class="content-right-banner">
            <a href="#" title="Xem ngay">Xem ngay</a>
         </div>
      </div> --}}
      <div class="row">
         <div class="col-lg-9 col-md-12">
            <div class="category-products products category-products-grids clearfix">
               <div class="sort-cate clearfix">
                  <div class="sort-cate-left">
                     <h3>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="12px" height="12px" viewBox="0 0 97.761 97.762" style="enable-background:new 0 0 97.761 97.762;"
                           xml:space="preserve">
                           <path d="M42.761,65.596H34.75V2c0-1.105-0.896-2-2-2H16.62c-1.104,0-2,0.895-2,2v63.596H6.609c-0.77,0-1.472,0.443-1.804,1.137
                              c-0.333,0.695-0.237,1.519,0.246,2.117l18.076,26.955c0.38,0.473,0.953,0.746,1.558,0.746s1.178-0.273,1.558-0.746L44.319,68.85
                              c0.482-0.6,0.578-1.422,0.246-2.117C44.233,66.039,43.531,65.596,42.761,65.596z"/>
                           <path d="M93.04,95.098L79.71,57.324c-0.282-0.799-1.038-1.334-1.887-1.334h-3.86c-0.107,0-0.213,0.008-0.318,0.024
                              c-0.104-0.018-0.21-0.024-0.318-0.024h-3.76c-0.849,0-1.604,0.535-1.887,1.336L54.403,95.1c-0.215,0.611-0.12,1.289,0.255,1.818
                              s0.983,0.844,1.633,0.844h5.773c0.88,0,1.657-0.574,1.913-1.416l2.536-8.324h14.419l2.536,8.324
                              c0.256,0.842,1.033,1.416,1.913,1.416h5.771c0.649,0,1.258-0.314,1.633-0.844C93.16,96.387,93.255,95.709,93.04,95.098z
                              M68.905,80.066c2.398-7.77,4.021-13.166,4.82-16.041l4.928,16.041H68.905z"/>
                           <path d="M87.297,34.053H69.479L88.407,6.848c0.233-0.336,0.358-0.734,0.358-1.143V2.289c0-1.104-0.896-2-2-2H60.694
                              c-1.104,0-2,0.896-2,2v3.844c0,1.105,0.896,2,2,2h16.782L58.522,35.309c-0.233,0.336-0.358,0.734-0.358,1.146v3.441
                              c0,1.105,0.896,2,2,2h27.135c1.104,0,2-0.895,2-2v-3.842C89.297,34.947,88.402,34.053,87.297,34.053z"/>
                        </svg>
                        Xếp theo
                     </h3>
                     <ul>
                        <li class="btn-quick-sort alpha-asc">
                           <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
                        </li>
                        <li class="btn-quick-sort alpha-desc">
                           <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
                        </li>
                        <li class="btn-quick-sort position-desc">
                           <a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng mới</a>
                        </li>
                        <li class="btn-quick-sort price-asc">
                           <a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                        </li>
                        <li class="btn-quick-sort price-desc">
                           <a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                        </li>
                     </ul>
                  </div>
                  <div class="evo-filter d-sm-inline-block d-lg-none">
                     <a class="btn btn-outline evo-btn-filter" title="Lọc">
                        Lọc
                        <svg class="svg-filter ml-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                           <path fill="#666" fill-rule="nonzero" d="M11.214 0H.504a.503.503 0 0 0-.448.273.51.51 0 0 0 .04.53l3.923 5.522.004.005c.143.193.22.425.22.665v4.501a.5.5 0 0 0 .699.464l2.205-.84a.477.477 0 0 0 .328-.47V6.995c0-.24.078-.472.22-.665l.004-.005L11.623.803a.509.509 0 0 0 .04-.53.503.503 0 0 0-.449-.273z"></path>
                        </svg>
                     </a>
                  </div>
               </div>
               <section class="products-view products-view-grid row">
                  @foreach ($list as $product)
                  <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                     @include('layouts.product.item', ['product'=>$product])
                  </div>
                  @endforeach
               </section>
            </div>
         </div>
         <div class="col-lg-3 col-md-12 left-content">
            <div class="evo-sidebar-pro">
               <div class="aside-filter clearfix">
                  <div class="heading">Lọc</div>
                  <div class="aside-hidden-mobile">
                     <div class="filter-container">
                        <div class="filter-containers d-none">
                           <div class="filter-container__selected-filter" style="display: none;">
                              <div class="filter-container__selected-filter-list clearfix">
                                 <ul>
                                 </ul>
                                 <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all" title="Bỏ hết">Bỏ hết</a>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        {{-- <aside class="aside-item filter-vendor">
                           <div class="aside-title">Thương hiệu <span class="svg svg1 collapsible-plus"></span></div>
                           <ul class="aside-content filter-group">
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <label data-filter="bosch" for="filter-bosch" class="bosch">
                                 <input type="checkbox" id="filter-bosch" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor.filter_key" data-text="Bosch" value='(&#34;Bosch&#34;)' data-operator="OR">
                                 <i class="fa"></i>
                                 Bosch
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <label data-filter="tolsen" for="filter-tolsen" class="tolsen">
                                 <input type="checkbox" id="filter-tolsen" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor.filter_key" data-text="Tolsen" value='(&#34;Tolsen&#34;)' data-operator="OR">
                                 <i class="fa"></i>
                                 Tolsen
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green ">
                                 <label data-filter="wesco" for="filter-wesco" class="wesco">
                                 <input type="checkbox" id="filter-wesco" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor.filter_key" data-text="Wesco" value='(&#34;Wesco&#34;)' data-operator="OR">
                                 <i class="fa"></i>
                                 Wesco
                                 </label>
                              </li>
                           </ul>
                        </aside> --}}
                        <aside class="aside-item filter-price">
                           <div class="aside-title">Giá sản phẩm <span class="svg svg1 collapsible-plus"></span></div>
                           <ul class="aside-content filter-group">
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-duoi-100-000d">
                                 <input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
                                 <i class="fa"></i>
                                 Giá dưới 100.000đ
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-100-000d-200-000d">
                                 <input type="checkbox" id="filter-100-000d-200-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)" data-operator="OR">
                                 <i class="fa"></i>
                                 100.000đ - 200.000đ							
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-200-000d-300-000d">
                                 <input type="checkbox" id="filter-200-000d-300-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 300.000đ" value="(>=200000 AND <=300000)" data-operator="OR">
                                 <i class="fa"></i>
                                 200.000đ - 300.000đ							
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-300-000d-500-000d">
                                 <input type="checkbox" id="filter-300-000d-500-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="300.000đ - 500.000đ" value="(>=300000 AND <=500000)" data-operator="OR">
                                 <i class="fa"></i>
                                 300.000đ - 500.000đ							
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-500-000d-1-000-000d">
                                 <input type="checkbox" id="filter-500-000d-1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1.000.000đ" value="(>=500000 AND <=1000000)" data-operator="OR">
                                 <i class="fa"></i>
                                 500.000đ - 1.000.000đ							
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-tren1-000-000d">
                                 <input type="checkbox" id="filter-tren1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 1.000.000đ" value="(>1000000)" data-operator="OR">
                                 <i class="fa"></i>
                                 Giá trên 1.000.000đ
                                 </label>
                              </li>
                           </ul>
                        </aside>
                        <aside class="aside-item filter-type">
                           <div class="aside-title">Loại sản phẩm <span class="svg svg1 collapsible-plus"></span></div>
                           <ul class="aside-content filter-group">
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label data-filter="máy khoan" for="filter-may-khoan">
                                 <input type="checkbox" id="filter-may-khoan" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type.filter_key" data-text="Máy khoan" value='(&#34;Máy khoan&#34;)' data-operator="OR">
                                 <i class="fa"></i>
                                 Máy khoan
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label data-filter="máy khoan pin" for="filter-may-khoan-pin">
                                 <input type="checkbox" id="filter-may-khoan-pin" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type.filter_key" data-text="Máy khoan pin" value='(&#34;Máy khoan pin&#34;)' data-operator="OR">
                                 <i class="fa"></i>
                                 Máy khoan pin
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label data-filter="máy vặn vít" for="filter-may-van-vit">
                                 <input type="checkbox" id="filter-may-van-vit" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type.filter_key" data-text="Máy vặn vít" value='(&#34;Máy vặn vít&#34;)' data-operator="OR">
                                 <i class="fa"></i>
                                 Máy vặn vít
                                 </label>
                              </li>
                           </ul>
                        </aside>
                        <aside class="aside-item filter-tag-style-1 tag-filtster">
                           <div class="aside-title">Loại thiết bị <span class="svg svg1 collapsible-plus"></span></div>
                           <ul class="aside-content filter-group">
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-chay-pin">
                                 <input type="checkbox" id="filter-chay-pin" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Chạy pin" value="(Chạy pin)" data-operator="OR">
                                 <i class="fa"></i>
                                 Chạy pin
                                 </label>
                              </li>
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <label for="filter-chay-dien">
                                 <input type="checkbox" id="filter-chay-dien" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Chạy điện" value="(Chạy điện)" data-operator="OR">
                                 <i class="fa"></i>
                                 Chạy điện
                                 </label>
                              </li>
                           </ul>
                        </aside>
                     </div>
                  </div>
               </div>
               <aside class="aside-item collection-category">
                  <div class="aside-title">Máy cầm tay điện</div>
                  <div class="aside-content clearfix">
                     <ul class="navbar-pills nav-category">
                        <li class="nav-item ">
                           <a class="nav-link" href="/may-khoan-van-vit" title="Máy khoan vặn vít">Máy khoan vặn vít</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="/may-mai-goc-cat-gach" title="Máy mài góc cắt gạch">Máy mài góc cắt gạch</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="/may-cua-dia-cua-xich" title="Máy cưa đĩa cưa xích">Máy cưa đĩa cưa xích</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="/may-khoan-duc-be-tong" title="Máy khoan đục bê tông">Máy khoan đục bê tông</a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="/may-cha-nham-danh-bong" title="Máy chà nhám đánh bóng">Máy chà nhám đánh bóng</a>
                        </li>
                     </ul>
                  </div>
               </aside>
            </div>
         </div>
      </div>
      <div class="row bottom-cate-banner">
         <div class="col-lg-6 col-md-6">
            <div class="evo-col-banner lazy" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/bottom_cate_slider_1.jpg?1663922909046">
               <div class="content-left-banner">
                  <div class="big-title">
                     Nikawa
                  </div>
                  <div class="small-title">
                     Hàng thật - Giá chất
                  </div>
                  <a href="#" title="Mua ngay">Mua ngay</a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3">
            <div class="evo-col-banner lazy" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/bottom_cate_slider_2.jpg?1663922909046">
               <div class="content-left-banner">
                  <div class="big-title">
                     Ghế xếp
                  </div>
                  <div class="small-title">
                     Thang nhôm
                  </div>
                  <a href="#" title="Mua ngay">Mua ngay</a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3">
            <div class="evo-col-banner lazy" data-src="//bizweb.dktcdn.net/100/418/839/themes/808559/assets/bottom_cate_slider_3.jpg?1663922909046">
               <div class="content-left-banner">
                  <div class="big-title">
                     Máy mài
                  </div>
                  <div class="small-title">
                     Máy cắt
                  </div>
                  <a href="#" title="Mua ngay">Mua ngay</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="product_recent product-page-viewed">
   <div class="container">
      <div class="home-title">Sản phẩm bạn vừa xem</div>
      <div class="product-page-viewed-wrap evo-slick-product swiper-container">
         <div class="swiper-wrapper"></div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </div>
</div>
@endsection