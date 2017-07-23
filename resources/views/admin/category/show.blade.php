@extends('layouts.admin')
@section('title') Category|Shopxingzai @endsection
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
                <a class="navbar-brand" href="{{url('admin/category')}}">Category</a>
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
                            <h4 class="title">Category List</h4>
                        </div>
                        @if(Session::has('success'))

                            <p class="text-primary">
                                {{Session::get('success')}}
                            </p>

                        @endif
                        <div class="content table-responsive table-full-width">
                            <a href="{{url('admin/category/create')}}">Create new Category</a>
                            {!! Form::open(['method'=>'GET','url'=>'admin/category']) !!}
                            <input type="text" name="keyword" placeholder="title"
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
                                <th>Title</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @if($categories)
                                    @foreach($categories as $key=>$item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->title}}</td>


                                            {!! Form::open(['method'=>'DELETE', 'url'=>'admin/category/'.$item->id]) !!}
                                            <td><a href="{{url('admin/category/'.$item->id.'/edit')}}">Edit</a>
                                                <button type="submit" class=""
                                                        onclick="return confirm('Bạn chắc chắn muốn xóa?');">Delete
                                                </button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection