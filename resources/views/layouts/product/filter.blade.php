@foreach ($products as $product)
<div class="col-lg-3 col-md-3 col-sm-4 col-6">
   @include('layouts.product.item', ['product'=>$product])
</div>
@endforeach
<div class="text-xs-right text-center pagging-css margin-top-20">
   <nav class="text-center">
      {{$products->links()}}
   </nav>
</div>