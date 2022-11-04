<div class="evo-cart-content">
    <div class="clearfix cart_heading">
    <h4 class="cart_title">Giỏ hàng</h4>
    <div class="cart_btn-close" title="Đóng giỏ hàng">
    <svg class="Icon Icon--close" viewBox="0 0 16 14">
        <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
    </svg>
    </div>
    </div>
    <div class="cart_body">
        @php
            $totalPrice = 0;
        @endphp
        @foreach ($cart as $item)
            @php
                $discountPrice = $item['price'] - $item['price'] * ($item['discount'] / 100);
                $totalPrice += $discountPrice * $item['quantity']; 
            @endphp
            <div class="clearfix cart_product">
                <a class="cart_image" href="#" title="{{languageName($item['name'])}}"><img src="{{$item['image']}}" alt="{{languageName($item['name'])}}"></a>
                <div class="cart_info">
                    <div class="cart_name"><a href="#" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a></div>
                    <div class="row-cart-left">
                        <div class="cart_item_name">
                            <div>
                            <label class="cart_quantity">Số lượng</label>
                            <div class="cart_select">
                                <div class="input-group-btn select-quantity" data-url="{{route('updateCart')}}">
                                    <input class="variantID" type="hidden" name="variantId" value="{{$item['id']}}">
                                    <button onclick="btnMinus({{$item['id']}})" class="reduced items-count btn-minus btn btn-default" type="button">–</button>
                                    <input type="text" maxlength="3" min="0" class="input-text number-sidebar qtyItem{{$item['id']}}" id="qtyItem{{$item['id']}}" name="Lines" size="4" value="{{$item['quantity']}}">
                                    <button onclick="btnPlus({{$item['id']}})" class="increase items-count btn-plus btn btn-default" type="button">+</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="text-right cart_prices">
                            <div class="cart__price"><span class="cart__sale-price">{{number_format($discountPrice, 0, '','.')}}₫</span></div>
                            <a class="cart__btn-remove remove-item-cart" href="javascript:void(0)" data-url="{{route('removeCart')}}" onclick="removeItemCart({{$item['id']}})" title="Bỏ sản phẩm">Bỏ sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="cart-footer">
    <hr>
    <div class="clearfix">
    <div class="cart__subtotal">
        <div class="cart__col-6">Tổng tiền:</div>
        <div class="text-right cart__totle"><span class="total-price">{{number_format($totalPrice, 0, '','.')}}₫</span></div>
    </div>
    </div>
    <div class="cart__btn-proceed-checkout-dt">
    <button onclick="location.href='{{route('checkout')}}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
    </div>
    </div>
</div>