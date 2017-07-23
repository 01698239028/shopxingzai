<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Title</label>
            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'title']) !!}
            {!! $errors->first('title','<span id="title-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Description</label>
            {!! Form::text('description', null,['class'=>'form-control', 'placeholder'=>'description']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Content</label>
            {!! Form::textarea('contents', null,['class'=>'form-control', 'placeholder'=>'contents']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>User</label>
            {!! Form::select('user_id',$users, null) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Product</label>
            {!! Form::select('product_id',$products, null) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Publishing date</label>
            {!! Form::text('publishing_date', null,['class'=>'form-control','placeholder'=>'publishing_date']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Image</label>
            {!! Form::file('file',['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>

<div class="clearfix"></div>