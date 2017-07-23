<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Title</label>
            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'title']) !!}
            {!! $errors->first('title','<span id="title-error" style="color: red">:message</span>') !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>

<div class="clearfix"></div>