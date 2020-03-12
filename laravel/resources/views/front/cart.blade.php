
@extends('layouts/nav')

@section('css')
<style>
ul{
    padding: 0px;
}
li{
    list-style: none;
}
.cart{
    padding-top: 200px
}
.container .row .col-6 .product{

    width: 606px;
    min-height: 500px;
    box-sizing: border-box;
    padding: 48px 48px 40px;
    margin-bottom: 60px;
    background: #fafafa;
}
.container .row .col-6 .product .product-capacity .product-capacity-inner{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    min-height: 58px;

}
.container .row .col-6 .product .product-capacity .product-capacity-inner .product-capacity-inner-btn{
    padding: 10px 20px;
    width: 160px;
    min-height: 58px;
    height: 100%;
    font-size: 16px;
    line-height: 20px;
    color: #757575;
    text-align: center;
    border: 1px solid #eee;
    background-color: #fff;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: opacity,border .2s linear;

}
.container .row .col-6 .product .product-color-inner{

    display: grid;
    grid-template-columns: repeat(3,1fr);
    min-height: 58px;
}

.container .row .col-6 .product .product-color-inner .color-btn{

    padding: 10px 20px;
    width: 160px;
    min-height: 58px;
    height: 100%;
    font-size: 16px;
    line-height: 20px;
    color: #757575;
    text-align: center;
    border: 1px solid #eee;
    background-color: #fff;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: opacity,border .2s linear;
}

.container .row .col-6 .product .product-inner{

    background-color: #fff;
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
    margin-top: 30px;
}
.btn-style{
    width: 50%;
    font-size: 20px;
    text-transform: uppercase;
    background-color: #ff9e0d;
    cursor: pointer;
}
.orange{
    color: #ff9e0d;
}
.color-btn.active{
    color: #424242;
    border-color: #ff6700;
    transition: opacity,border .2s linear;
}

</style>

@endsection


@section('content')

<section class="engine"><a href="">css templates</a></section>

<section class="features3 cid-rRF3umTBWU" id="features3-7">

    <div class="container cart">
        <div class="row">
            <div class="col-6">

            </div>

            <div class="col-6 ">
                <div class="product">

                    <div class="product-title">
                        <div class="product-title-9T">
                            <h1>小米9T</h1>
                        </div>
                        <div class="product-title-inf">
                            <span>6GB+128GB, 火焰紅</span>
                        </div>
                        <div class="product-title-price">
                            <span class="orange">NT$ 8,999</span>
                            <del>NT$9,999</del>
                        </div>
                    </div>

                    <div class="product-double">
                        <span>該商品可享受雙倍積分</span>
                    </div>

                    <div class="product-capacity">
                        <div class="product-capacity-title">
                            <span>容量</span>
                        </div>

                        <div class="product-capacity-inner">
                            <div class="product-capacity-inner-btn ">
                                6GB+128GB
                            </div>
                        </div>
                    </div>


                    <div class="product-color">
                        <div class="product-color-title">
                            <h3>顏色</h3>
                        </div>
                        <div class="product-color-inner">

                            <div class="color-btn">
                                <span>紅</span>
                            </div>
                            <div class="color-btn">
                                <span>黑</span>
                            </div>
                            <div class="color-btn">
                                <span>藍</span>
                            </div>
                            <div class="color-btn">
                                <span>紫</span>
                            </div>
                        </div>

                    </div>
                    <div class="product-number">
                        <div class="product-number-title">
                            <h3>數量</h3>
                        </div>
                        <div class="product-number-inner">

                        </div>

                    </div>
                    <div class="product-inner">
                        <ul>
                            <li class=" d-flex justify-content-between">
                                <span>小米9T 火焰紅 6GB+128GB * 1</span>
                                <div>
                                 <strong>NT$ 8,999</strong>
                                <del>NT$9,999</del>
                                </div>

                            </li>
                            <li class=" d-flex justify-content-between">
                                <span>總計</span>
                                <div class="product-inner-price">
                                    <span>8,999</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="product-cart">
                        <div class="product-cart-notify">
                            <span>想要購買此商品? 請點選"到貨通知我"</span>
                        </div>
                        <button class="btn-style">立即購買</button>
                    </div>
                </div>

            </div>


          </div>
    </div>

</section>
@endsection

@section('js')
<script>
    $('.color-btn').click(function(){
        $(*).removeClass('active');
        $(this).addClass('active');
    })

</script>

@endsection
