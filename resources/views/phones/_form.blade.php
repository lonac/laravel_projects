<div class="form-group">
    <label for="number" class="col-sm-2 control-label">Number</label>
    <div class="col-sm-5">
        <input type="number" name="number" id="number" class="form-control"
               value="{{ isset($phone->number) ? $phone->number : old('number') }}">
        @if($errors->has('number'))
            <p>
                <strong>{{ $errors->first('number') }}</strong>
            </p>
        @endif
    </div>
</div>