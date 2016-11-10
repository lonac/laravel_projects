<div class="form-group">
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
        <input type="text" name="address" id="address" class="form-control"
               value="{{ isset($church->address) ? $church->address : old('address') }}" required="required" title="">
        @if($errors->has('address'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('address') }}
                </span>
            </p>
        @endif
    </div>
</div>