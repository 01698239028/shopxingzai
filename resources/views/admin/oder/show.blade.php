@extends('layouts.admin')
@section('title') Oder|Shopxingzai @endsection
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
                <a class="navbar-brand" href="{{url('admin/oder')}}">Oder</a>
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
                            <h4 class="title">Oder List</h4>
                        </div>
                        @if(Session::has('success'))

                            <p class="text-primary">
                                {{Session::get('success')}}
                            </p>

                        @endif
                        <div class="content table-responsive table-full-width">
                            {{--<a href="{{url('admin/product/create')}}">Create new Product</a>--}}
                            {!! Form::open(['method'=>'GET','url'=>'admin/oder']) !!}
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
                                <th>receiver name</th>
                                <th>receiver phone_number</th>
                                <th>receiver email</th>
                                <th>receiver address</th>
                                <th>user</th>
                                <th>amount</th>
                                <th>service name</th>
                                <th>payment</th>
                               {{-- <th>payment info</th>
                                <th>security</th>--}}
                                <th>receiver date</th>
                                <th>status</th>
                                </thead>
                                <tbody>
                                @if($oder)
                                    @foreach($oder as $key=>$item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->receiver_name }}</td>
                                            <td>{{ $item->receiver_phone_number }}</td>
                                            <td>{{ $item->receiver_email }}</td>
                                            <td>{{ $item->receiver_address }}</td>
                                            <td>{{ $item->user->user_name }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->service_name }}</td>
                                            <td>{{ $item->payment }}</td>
                                            {{--<td>{{ $item->payment_info }}</td>
                                            <td>{{ $item->security }}</td>--}}
                                            <td>{{ $item->receiver_date }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{url('admin/oder/'.$item->id.'/edit')}}">Edit</a>
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