@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="container p-4">
            <form action="" enctype="multipart/form-data" method="">


                <div class="shopping-cart py-5">

                    <div class="column-labels">
                        <label class="product-image text-center">Image</label>
                        <label class="product-details text-center">Product</label>
                        <label class="product-price text-center">Price</label>
                        <label class="product-quantity text-center">Quantity</label>
                        <label class="product-removal text-center">Remove</label>
                        <label class="product-line-price text-center">Total</label>
                    </div>
                       {{--  begin  --}}
                        @foreach ($carts as $cart)
                        <div class="product">

                            <div class="product-image text-center p-3">
                                <img src="{{ asset('storage/' . $cart['image'] ) }}" class=" img-thumbnail">
                            </div>
                            <div class="product-details">
                                <div class="product-title card-text text-success bold text-center ">
                                   {{ $cart['name'] }}
                                </div>
                                <p class="product-description card-text text-center ">
                                    {{ $cart['description'] }}
                                </p>
                            </div>
                            <div class="product-price price card-text text-center p-3 text-success">
                                {{ $cart['price'] }}
                            </div>
                            <div class="product-quantity text-center px-3 py-4">
                                <input type="number" value="{{ $cart['quantity'] }}" min="1" onchange="updatequantity(this)">
                            </div>
                            <div class="product-removal text-center p-3">
                            <a href="/delete/{{ $cart['id'] }}" class="remove-product button-62 remove-from-cart delete"
                                    data-id="{{ $cart['id'] }}">
                                    Remove
                            </a>
                            </div>
                            <div class="product-line-price price card-text text-center p-3 text-success ">
                                {{ $cart['price']*$cart['quantity'] }}</div>
                        </div>
                        @endforeach
                       {{--  end  --}}
                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}

                    {{-- --------------------------------------------------------------------------------------------------------------------- --}}
                    <!-- <div class="totals">
                                                                    <div class="totals-item">
                                                                        <label>Subtotal</label>
                                                                        <div class="totals-value  text-success card-text" id="cart-subtotal">3696.99</div>
                                                                    </div>
                                                                    <div class="totals-item">
                                                                        <label>Tax (5%)</label>
                                                                        <div class="totals-value  text-success card-text" id="cart-tax">3.60</div>
                                                                    </div>
                                                                    <div class="totals-item">
                                                                        <label>Shipping</label>
                                                                        <div class="totals-value  text-success card-text" id="cart-shipping">15.00</div>
                                                                    </div> -->
                    <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value  text-success card-text" id="cart-total "></div>
                    </div>

                </div>

                <a  href="/checkout" class="checkout button-63">Checkout</a>
                <br>

        </div>



        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="function.js"></script>
        </form>

        <br>
    </div>
    <br>
    </div>

    <br>
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
    {{--  <script type="text/javascript">
        function updatequantity(obj){
            let num = obj.value;
            location.href="/cart/"+num;
        }
    </script>  --}}
@endsection
