<div class="form-group">
    <label for="title" class="control-label">Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" id="title" class="form-control" value="{{ isset($period->title) ? $period->title : old('period') }}" required="required" title="">
    </div>
</div>
<div class="form-group">
    <label for="start_time" class="control-label">From</label>
    <div class="col-sm-10">
        <input type="time" name="start_time" id="start_time" class="form-control" value="{{ isset($period->start_time) ? $period->start_time : \Carbon\Carbon::now() }}" required="required" title="">
    </div>
</div>  
<div class="form-group">
    <label for="finish_time" class="control-label">To</label>
    <div class="col-sm-10">
        <input type="time" name="finish_time" id="finish_time" class="form-control" value="{{ isset($period->finish_time) ? $period->finish_time : \Carbon\Carbon::now() }}" required="required" title="">
    </div>
</div> 
<div class="form-group">
    <label for="finish_time" class="control-label">Day</label>
    <div class="col-sm-10">
        <select name="day" id="day" class="form-control">
            <option value="">-- Select One --</option>
            @foreach($days as $day)
                <option value="{{ $day->id }}"
                @if (isset($period->day_id))
                    @if ($period->day_id == $day->id)
                        selected="selected" 
                    @endif
                @endif
                >{{ $day->name }}</option>
            @endforeach
        </select>
    </div>
</div>                                              
<div class="form-group">
    <label for="description" class="control-label">Description</label>
    <div class="col-sm-10">
        <textarea name="description" id="description" class="form-control" rows="5" required="required">{{ isset($period->description) ? $period->description : old('description') }}</textarea>
    </div>
</div>              
<div class="checkbox">
    <label>
        <input type="checkbox" name="published" value="1" @if($period->published == 1) checked="checked" @endif>
        Published
    </label>
</div>