@if (count($products) > 0)
<div class="evo-owl-product2 swiper-container products-view-grid">
    <div class="swiper-wrapper">
    @foreach ($products as $product)
        <div class="swiper-slide">
            @include('layouts.product.item', ['product'=>$product])
        </div>
    @endforeach
    </div>
</div>
@else
<div class="alert alert-success alert-dismissible fade in show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    Nội dung đang cập nhật.	
</div>
@endif