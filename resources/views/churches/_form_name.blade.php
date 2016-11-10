<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Your church name</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="name" required="required"
               value="{{ isset($church->name) ? $church->name : old('name') }}">
        @if($errors->has('name'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('name') }}
                </span>
            </p>
        @endif
    </div>
</div>