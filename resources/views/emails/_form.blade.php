<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Number</label>
    <div class="col-sm-5">
        <input type="email" name="email" id="email" class="form-control"
               value="{{ isset($email->address) ? $email->address : old('email') }}">
        @if($errors->has('email'))
            <p>
                <strong>{{ $errors->first('email') }}</strong>
            </p>
        @endif
    </div>
</div>