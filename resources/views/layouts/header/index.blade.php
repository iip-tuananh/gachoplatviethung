<header class="header">
   <div class="container header-main">
   <div class="row">
         <div class="col-md-3 col-100-h">
            <button type="button" class="navbar-toggle collapsed visible-sm visible-xs d-sm-inline-block d-lg-none" id="trigger-mobile">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <div class="logo">
               <a href="{{route('home')}}" class="logo-wrapper ">					
               <img src="{{$setting->logo}}" alt="{{$setting->company}}">					
               </a>					
            </div>
            <div class="mobile-cart visible-sm visible-xs d-sm-inline-block d-lg-none evo-header-cart">
               <a href="javascript:void(0);" title="Giỏ hàng">
               <i class="fa fa-shopping-bag"></i>
               <div class="cart-right">
                  @if (count($cartcontent) > 0)
                  <span class="count_item_pr">{{count($cartcontent)}}</span>
                  @else
                  <span class="count_item_pr">0</span>
                  @endif
               </div>
               </a>
            </div>
         </div>
         <div class="col-md-5">
            <div class="search evo-search-desktop">
               <div class="header_search search_form evo-search">
               <form class="input-group search-bar search_form evo-header-search-form" action="{{route('search_result')}}" method="POST" role="search">	
                  @csrf	
                     <input type="text" name="keyword" value="" placeholder="Tìm kiếm sản phẩm... " class=" st-default-search-input search-text" autocomplete="off">
                     <span class="input-group-btn">
                     <button class="btn icon-fallback-text">
                     <i class="fa fa-search"></i>
                     </button>
                     </span>
               </form>
               </div>
            </div>
         </div>
         <div class="col-md-4 hidden-sm hidden-xs">
            <div class="header-right clearfix d-none d-lg-inline-block">
               <div class="top-cart-contain f-right evo-header-cart">
               <div class="mini-cart text-xs-center">
                     <div class="heading-cart cart_header">
                        <div class="icon_hotline">
                           <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </div>
                        <div class="content_cart_header">
                           @if (count($cartcontent) > 0)
                              <a class="bg_cart" href="javascript:void(0);" title="Giỏ hàng">
                              (<span class="count_item count_item_pr">{{count($cartcontent)}}</span>) Sản phẩm
                              <span class="text-giohang">Giỏ hàng</span>
                              </a>
                           @else
                              <a class="bg_cart" href="javascript:void(0);" title="Giỏ hàng">
                                 (<span class="count_item count_item_pr">0</span>) Sản phẩm
                                 <span class="text-giohang">Giỏ hàng</span>
                              </a>
                           @endif
                        </div>
                     </div>
               </div>
               </div>
               <div class="hotline_dathang f-right hidden-sm draw">
               <div class="icon_hotline">
                     <i class="fa fa-phone" aria-hidden="true"></i>
               </div>
               <div class="content_hotline">
                     <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
                     <span>Tổng đài miễn phí</span>
               </div>
               </div>
            </div>
         </div>
   </div>
   </div>
   <nav class="hidden-sm hidden-xs">
   <div class="container">
         <div class="row">
            <div class="col-md-3 no-padding">
               <div class="mainmenu ">
                     <span><i class="fa fa-th-list"></i> Danh mục sản phẩm</span>
                     <div class="nav-cate">
                     <ul id="menu2017">
                        @foreach ($categoryhome as $cate)
                        @if (count($cate->typeCate) > 0)
                        <li class="dropdown menu-item-count clearfix">
                           <h3>
                                 <img src="{{$cate->avatar}}" alt="{{languageName($cate->name)}}" />
                                 <a href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                           </h3>
                           <div class="subcate gd-menu">
                                 <div class="sub-flex clearfix">
                                 <ul>
                                    @foreach ($cate->typeCate as $typeCate)
                                    @if (count($typeCate->typetwo) > 0)
                                    <li class="sub-hassub">
                                       <a class="sub-a" href="{{route('allListProType', ['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}" title="{{languageName($typeCate->name)}}">{{languageName($typeCate->name)}}</a>
                                       <div class="subcate2">
                                          @foreach ($typeCate->typetwo as $typetwo)
                                          <a href="{{route('allListTypeTwo', ['cate'=>$typetwo->cate_slug, 'typecate'=>$typetwo->type_slug, 'typetwo'=>$typetwo->slug])}}" title="{{languageName($typetwo->name)}}">{{languageName($typetwo->name)}}</a>
                                          @endforeach
                                       </div>
                                    </li>
                                    @else
                                    <li>
                                       <a class="sub-a" href="{{route('allListProType', ['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}" title="{{languageName($typeCate->name)}}">{{languageName($typeCate->name)}}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                 </ul>
                                 </div>
                           </div>
                        </li>
                        @else
                        <li class="menu-item-count clearfix">
                           <h3>
                              <img src="{{$cate->avatar}}" alt="{{languageName($cate->name)}}" />
                              <a href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                           </h3>
                        </li>
                        @endif
                        @endforeach
                     </ul>
                     </div>
               </div>
            </div>
            <div class="col-md-9 no-padding">
               <ul id="nav" class="nav">
                     <li class="nav-item {{ Route::currentRouteName()== 'home' ? 'active' : '' }}"><a class="nav-link" href="{{route('home')}}">Trang chủ</a></li>
                     <li class="nav-item {{ Route::currentRouteName()== 'aboutUs' ? 'active' : '' }}"><a class="nav-link" href="{{route('aboutUs')}}">Giới thiệu</a></li>
                     @foreach ($blogCate as $cate)
                     <li class="nav-item {{url()->current() == route('listCateBlog', ['slug'=>$cate->slug]) ? 'active' : ''}}"><a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
                     @endforeach
                     <li class="nav-item {{ Route::currentRouteName()== 'lienHe' ? 'active' : '' }}"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a></li>
               </ul>
            </div>
         </div>
   </div>
   </nav>
   <script>
   if ($(window).width() > 1100){
         
         
         var menu_limit = "8";
         if (isNaN(menu_limit)){
            menu_limit = 10;
         } else {
            menu_limit = 7;
         }
   }else{
         
         
         var menu_limit = "7";
         if (isNaN(menu_limit)){
            menu_limit = 8;
         } else {
            menu_limit = 6;
         }
   }
   var sidebar_length = $('.menu-item-count').length;
   if (sidebar_length > (menu_limit + 1) ){
         $('.nav-cate:not(.site-nav-mobile) > ul').each(function(){
            $('.menu-item-count',this).eq(menu_limit).nextAll().hide().addClass('toggleable');
            $(this).append('<li class="more"><h3><a><label>Xem thêm ... </label></a></h3></li>');
         });
         $('.nav-cate > ul').on('click','.more', function(){
            if($(this).hasClass('less')){
               $(this).html('<h3><a><label>Xem thêm ...</label></a></h3>').removeClass('less');
            } else {
               $(this).html('<h3><a><label>Thu gọn ... </label></a></h3>').addClass('less');;
            }
            $(this).siblings('li.toggleable').slideToggle({
               complete: function () {
                     var divHeight = $('#menu2017').height() + 1; 
                     $('.subcate.gd-menu').css('min-height', divHeight+'px');
                     $('.subcate2').css('min-height', divHeight+'px');
               }
            });
         });
         $('.mainmenu-other').hover(function() {
            var divHeight = $('#menu2017').height() + 1; 
            $('.subcate.gd-menu').css('min-height', divHeight+'px');
            $('.subcate2').css('min-height', divHeight+'px');
         });
   }
   </script>
</header>
<div class="mobile-main-menu">
   <div class="la-scroll-fix-infor-user">
         <button class="evo-close-menu" aria-label="Đóng menu" title="Đóng menu">
         <svg class="Icon Icon--close" viewBox="0 0 16 14">
            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
         </svg>
         </button>
         <ul class="la-nav-list-items">
         <li class="ng-scope active">
            <a href="{{route('home')}}" title="Trang chủ">Trang chủ</a>
         </li>
         <li class="ng-scope ">
            <a href="{{route('aboutUs')}}" title="Giới thiệu">Giới thiệu</a>
         </li>
         @foreach ($blogCate as $cate)
         <li class="ng-scope ">
            <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
         </li>
         @endforeach
         <li class="ng-scope ">
            <a href="{{route('lienHe')}}" title="Liên hệ">Liên hệ</a>
         </li>
         <li class="ng-scope ng-cate">Danh mục sản phẩm</li>
         @foreach ($categoryhome as $cate)
            @if (count($cate->typeCate) > 0)
            <li class="ng-scope ng-has-child1">
               <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}} <span class="svg svg1 collapsible-plus"></span></a>
               <ul class="ul-has-child1">
                  @foreach ($cate->typeCate as $typeCate)
                  <li class="ng-scope">
                        <a href="{{route('allListProType', ['cate'=>$typeCate->cate_slug, 'type'=>$typeCate->slug])}}" title="{{languageName($typeCate->name)}}">{{languageName($typeCate->name)}}</a>
                  </li>
                  @endforeach
               </ul>
            </li>
            @else
            <li class="ng-scope ">
               <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
            </li>
            @endif
         @endforeach
         </ul>
   </div>
</div>