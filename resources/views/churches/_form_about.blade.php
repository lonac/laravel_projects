<div class="form-group">
    <label for="description" class="col-sm-2 control-label">About</label>
    <div class="col-sm-10">
        <textarea name="description" id="description" class="form-control" rows="10"
                  placeholder="Write a short description about your church here."
                  required="required">{{ isset($church->description) ? $church->description : old('description') }}</textarea>
        @if($errors->has('description'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('description') }}
                </span>
            </p>
        @endif
    </div>
</div>