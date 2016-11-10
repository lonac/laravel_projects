<div class="form-group">
    <label for="district" class="col-sm-2 control-label">District</label>
    <div class="col-sm-5">
        <select name="district" id="district" class="form-control">
            @if($districts->count() > 0)
                <option value="">-- Select One --</option>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}"
                            @if(isset($church->district))
                            @if($church->district_id == $district->id)
                            selected="selected"
                            @endif
                            @endif
                    >{{ $district->name }}</option>
                @endforeach
            @else
                <option value="">Empty</option>
            @endif
        </select>
        @if($errors->has('district'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('district') }}
                </span>
            </p>
        @endif
    </div>
</div>