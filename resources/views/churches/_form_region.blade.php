<div class="form-group">
    <label for="region" class="col-sm-2 control-label">Region</label>
    <div class="col-sm-5">
        <select name="region" id="region" class="form-control">
            @if($regions->count() > 0)
                <option value="">-- Select One --</option>
                @foreach($regions as $region)
                    <option value="{{ $region->id }}"
                            @if(isset($church->region_id))
                            @if($church->region_id == $region->id)
                            selected="selected"
                            @endif
                            @endif
                    >{{ $region->name }}</option>
                @endforeach
            @else
                <option value="">Empty</option>
            @endif
        </select>
        @if($errors->has('region'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('region') }}
                </span>
            </p>
        @endif
    </div>
</div>