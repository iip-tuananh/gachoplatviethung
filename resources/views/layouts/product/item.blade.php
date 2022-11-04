
@php
$img = json_decode($product['images']);
$discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
@endphp
<div class="evo-product-item">
   <div class="thumb-evo">
      @if ($product->discount > 0)
      <strong> {{$product->discount}}% </strong>
      @endif
      <a class="thumb-img" href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
      <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}" alt="{{languageName($product->name)}}" />
      </a>
   </div>
   {{-- <div class="pro-brand">
      <a href="/search?query=vendor:Dewalt" title="Dewalt">Dewalt</a>
   </div> --}}
   <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}" class="title">{{languageName($product->name)}}</a>
   <div class="flex-prices">
      @if ($product->price > 0 && $product->discount > 0)
      <div class="block-prices">
            <strong class="product-price">{{number_format($discountPrice, 0, '', '.')}}₫</strong>
            <span class="product-old-price">{{number_format($product->price, 0, '', '.')}}₫</span>
      </div>
      @elseif($product->price > 0 && $product->discount == 0)
      <div class="block-prices">
         <strong class="product-price">{{number_format($product->price, 0, '', '.')}}₫</strong>
      </div>
      @else
      <div class="block-prices">
         <a href="tel:{{$setting->phone1}}"><strong class="product-price">Liên hệ</strong></a>
      </div>
      @endif
      <form action="" method="post" enctype="multipart/form-data" class="button-add hidden-sm hidden-xs hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-20884651">
            <input type="hidden" name="variantId" value="{{$product->id}}" />
            <button type="button" title="Thêm vào giỏ" class="action add_to_cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
               <path d="m472 452c0 11.046-8.954 20-20 20h-20v20c0 11.046-8.954 20-20 20s-20-8.954-20-20v-20h-20c-11.046 0-20-8.954-20-20s8.954-20 20-20h20v-20c0-11.046 8.954-20 20-20s20 8.954 20 20v20h20c11.046 0 20 8.954 20 20zm0-312v192c0 11.046-8.954 20-20 20s-20-8.954-20-20v-172h-40v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-192v60c0 11.046-8.954 20-20 20s-20-8.954-20-20v-60h-40v312h212c11.046 0 20 8.954 20 20s-8.954 20-20 20h-232c-11.046 0-20-8.954-20-20v-352c0-11.046 8.954-20 20-20h60.946c7.945-67.477 65.477-120 135.054-120s127.109 52.523 135.054 120h60.946c11.046 0 20 8.954 20 20zm-121.341-20c-7.64-45.345-47.176-80-94.659-80s-87.019 34.655-94.659 80z" fill="#6c757d" data-original="#000000" style="" class=""/>
            </svg>
            </button>
      </form>
   </div>
</div>
