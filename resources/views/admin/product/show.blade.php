@extends('layouts.admin')
@section('title') Product|Shopxingzai @endsection
@section('content')
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('admin/product')}}">Product</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-dashboard"></i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i>
                            <b class="caret hidden-sm hidden-xs"></b>
                            <span class="notification hidden-sm hidden-xs">5</span>
                            <p class="hidden-lg hidden-md">
                                5 Notifications
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Notification 1</a></li>
                            <li><a href="#">Notification 2</a></li>
                            <li><a href="#">Notification 3</a></li>
                            <li><a href="#">Notification 4</a></li>
                            <li><a href="#">Another notification</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-search"></i>
                            <p class="hidden-lg hidden-md">Search</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">
                            <p>Account</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p>
                                Dropdown
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <p>Log out</p>
                        </a>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Product List</h4>
                        </div>
                        @if(Session::has('success'))

                            <p class="text-primary">
                                {{Session::get('success')}}
                            </p>

                        @endif
                        <div class="content table-responsive table-full-width">
                            <a href="{{url('admin/product/create')}}">Create new Product</a>
                            {!! Form::open(['method'=>'GET','url'=>'admin/product']) !!}
                            <input type="text" name="keyword" placeholder="name"
                                   @if(Request::has('keyword'))
                                   value="{{Request::get('keyword')}}"
                                    @endif
                            />
                            <input type="submit" value="Search"/>
                            {!! Form::close() !!}
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>No.</th>
                                <th>ID</th>
                                <th>name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Size</th>
                                <th>Description</th>
                                </thead>
                                <tbody>
                                @if($product)
                                    @foreach($product as $key=>$item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->category->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->discount }}</td>
                                            <td>
                                                <img src="{{ url('../uploads/product/'. $item->image) }}" alt="" width="100"/>
                                            </td>
                                            <td>{{$item->size}}</td>
                                            <td>{{$item->description}}</td>


                                            {!! Form::open(['method'=>'DELETE', 'url'=>'admin/product/'.$item->id]) !!}
                                            <td>
                                                <a href="{{url('admin/product/'.$item->id.'/edit')}}">Edit</a>
                                                <button type="submit" class="" onclick="return confirm('Bạn chắc chắn muốn xóa?');">Delete</button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="page">{{$product->links()}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection