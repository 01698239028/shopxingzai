@extends('layouts.shop')
@section('content')
    <!--banner-->
    <div class="banner-w3">
        <div class="demo-1">
            <div id="example1" class="core-slider core-slider__carousel example_1">
                <div class="core-slider_viewport">
                    <div class="core-slider_list">
                        <div class="core-slider_item">
                            <img src="{{asset('shop/images/slide1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('shop/images/slide2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('shop/images/slide3.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{asset('shop/images/slide4.jpg')}}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="core-slider_nav">
                    <div class="core-slider_arrow core-slider_arrow__right"></div>
                    <div class="core-slider_arrow core-slider_arrow__left"></div>
                </div>
                <div class="core-slider_control-nav"></div>
            </div>
        </div>
        <link href="{{asset('shop/css/coreSlider.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('shop/js/coreSlider.js')}}"></script>
        <script>
            $('#example1').coreSlider({
                pauseOnHover: false,
                interval: 3000,
                controlNavEnabled: true
            });

        </script>

    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <!--Products-->
        <div class="product-agile">
            <div class="container">
                <h3 class="tittle1"> Search </h3>
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <div class="caption">
                                    @foreach($products as $p)
                                        <div class="col-md-3 cap-left simpleCart_shelfItem">
                                            <div class="grid-arr">
                                                <div  class="grid-arrival">
                                                    <figure>
                                                        <a href="single.html">
                                                            <div class="grid-img">
                                                                <img  src="{{asset('uploads/product/'.$p->image)}}" class="img-responsive" alt="">
                                                            </div>
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <div class="women">
                                                    <h6><a href="single.html">{{$p->name}}</a></h6>
                                                    <span class="size">{{$p->size}}</span>
                                                    <p >{{--<del>$100.00</del>--}}<em class="item_price">{{number_format($p->price)}} vnđ</em></p>
                                                    <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Products-->
        {{--<div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="tittle1">Best Sellers</h3>
                <div class="arrivals-grids">
                    @foreach($best_sale as $sale)
                        <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                            <div class="grid-arr">
                                <div  class="grid-arrival">
                                    <figure>
                                        <a href="single.html">
                                            <div class="grid-img">
                                                <img  src="../uploads/product/{{$sale->image}}" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                                <div class="ribben1">
                                    <p>SALE</p>
                                </div>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="women">
                                    <h6><a href="single.html">{{$sale->name}}</a></h6>
                                    <span class="size">{{$sale->size}}</span>
                                    <p ><del>$100.00</del><em class="item_price">{{number_format($sale->price)}} vnđ</em></p>
                                    <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                    <div class="row">{{$best_sale->links()}}</div>
                </div>
            </div>
        </div>--}}
        <!--new-arrivals-->
    </div>
    <!--content-->

@endsection