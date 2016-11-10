<div class="form-group">
    <label for="category" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-5">
        <select name="category" id="category" class="form-control">
            @if($categories->count() > 0)
                <option value="">-- Select One --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            @if(isset($church->category_id))
                            @if($church->category_id == $category->id)
                            selected="selected"
                            @endif
                            @endif
                    >{{ $category->name }}</option>
                @endforeach
            @else
                <option value="">Empty</option>
            @endif
        </select>
        @if($errors->has('category'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('category') }}
                </span>
            </p>
        @endif
    </div>
</div>