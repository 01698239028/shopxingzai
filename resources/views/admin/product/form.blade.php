<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Name</label>
            {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'name']) !!}
            {!! $errors->first('name','<span id="name-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Price</label>
            {!! Form::text('price', null,['class'=>'form-control', 'placeholder'=>'price']) !!}
            {!! $errors->first('price','<span id="price-error" style="color: red">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Discount</label>
            {!! Form::text('discount', null,['class'=>'form-control', 'placeholder'=>'discount']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Description</label>
            {!! Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'description']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Category</label>
            {!! Form::select('category_id',$categories, null) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Size</label>
            {{-- {!! Form::select('size', $product,null) !!}--}}
            <select name="size">
                <option value="">No Size</option>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
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