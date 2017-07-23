<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Size</label>
            {{-- {!! Form::select('size', $product,null) !!}--}}
            <select name="status">
                <option value="0">Đang xác nhận</option>
                <option value="1">Đang đóng gói</option>
                <option value="2">Đang giao hàng</option>
                <option value="3">Đã nhận hàng</option>
            </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>

<div class="clearfix"></div>