@extends('layouts.shop')
@section('content')

    <div class="content">
        <!--login-->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile form1">
                    <h3>Register</h3>
                    {{--<form action="#" method="post">
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Submit">
                    </form>--}}

                    {!! Form::open(['type'=>'POST','url'=>'homeshop','role'=>'form']) !!}

                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::text('user_name',null,['placeholder'=>'Username'])  !!}
                        {!! $errors->first('user_name','<span id="user_name-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::text('first_name',null,['placeholder'=>'first_name'])  !!}
                        {!! $errors->first('first_name','<span id="first_name-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::text('last_name',null,['placeholder'=>'last_name'])  !!}
                        {!! $errors->first('last_name','<span id="last_name-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <label>Gender</label>
                        <select name="gender">
                            <option value="nam">nam</option>
                            <option value="nữ">nữ</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::text('address',null,['placeholder'=>'address'])  !!}
                        {!! $errors->first('address','<span id="address-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::number('phone_number',null,['placeholder'=>'phone_number'])  !!}
                        {!! $errors->first('phone_number','<span id="phone_number-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::text('email',null,['placeholder'=>'email'])  !!}
                        {!! $errors->first('email','<span id="email-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::password('password',null,['placeholder'=>'password'])  !!}
                        {!! $errors->first('password','<span id="password-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {!!Form::password('confirm_password',null,['placeholder'=>'confirm_password'])  !!}
                        {!! $errors->first('confirm_password','<span id="confirm_password-error" style="color: red">:message</span>') !!}
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Submit">
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <!--login-->
    </div>

@endsection
