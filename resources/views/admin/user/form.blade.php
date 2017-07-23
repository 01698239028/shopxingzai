<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>User Name</label>
            {!! Form::text('user_name', null,['class'=>'form-control', 'placeholder'=>'user name']) !!}
            {!! $errors->first('user_name','<span id="user_name-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Email</label>
            {!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>'email']) !!}
            {!! $errors->first('email','<span id="email-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>First name</label>
            {!! Form::text('first_name', null,['class'=>'form-control', 'placeholder'=>'first name']) !!}
            {!! $errors->first('first_name','<span id="first_name-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Last name</label>
            {!! Form::text('last_name', null,['class'=>'form-control', 'placeholder'=>'last name']) !!}
            {!! $errors->first('last_name','<span id="last_name-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Gender</label>
            <select name="gender">
                <option value="nam">nam</option>
                <option value="nữ">nữ</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Address</label>
            {!! Form::text('address', null,['class'=>'form-control', 'placeholder'=>'address']) !!}
            {!! $errors->first('address','<span id="address-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Phone number</label>
            {!! Form::text('phone_number', null,['class'=>'form-control', 'placeholder'=>'phone number']) !!}
            {!! $errors->first('phone_number','<span id="phone_number-error" style="color: red">:message</span>') !!}
        </div>
    </div>Maps
    <div class="col-md-6">
        <div class="form-group">
            <label>Group</label>
            {!! Form::select('group_id',$groups,null) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>

<div class="clearfix"></div>