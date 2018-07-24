@extends('layouts.shop')
@section('content')
    <div class="content">
        <div class="products-agileinfo">
            <h2 class="tittle">Trà sữa</h2>
            <div class="container">
                <div class="product-agileinfo-grids w3l">
                    <div class="col-md-9 product-agileinfon-grid1 w3l">
                        <div class="product-agileinfon-top">
                            <div class="col-md-6 product-agileinfon-top-left">
                                <img class="img-responsive " src="images/img1.jpg" alt="">
                            </div>
                            <div class="col-md-6 product-agileinfon-top-left">
                                <img class="img-responsive " src="images/img2.jpg" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="product-tab">
                                            @if(isset($products))
                                                @foreach($products as $key => $item)
                                            <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div  class="grid-arrival">
                                                        <figure>
                                                            <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                                <div class="grid-img">
                                                                    <img  src="{{asset('uploads/product/'.$item->image)}}" class="img-responsive" alt="">
                                                                </div>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html">{{$item->name}}</a></h6>
                                                        <span class="size">Size: {{$item->size}}</span>
                                                        <p ><del></del><em class="item_price">{{number_format($item->price)}} vnđ</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                                    @if($key > 0 && (($key + 1)% 3)== 0 )
                                                        <div class="clearfix"></div>
                                                    @endif
                                            @endforeach
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
@endsection