<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Event Title</label>
    <div class="col-sm-10">
        <input type="text" name="title" id="title" class="form-control"
               value="{{ isset($event->title) ? $event->title : old('title') }}" required="required" title="">
    </div>
</div>
<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Event Description</label>
    <div class="col-sm-10">
        <textarea name="description" id="description" class="form-control" rows="5"
                  required="required">{{ isset($event->description) ? $event->description : old('description') }}</textarea>
    </div>
</div>
<div class="form-group">
    <label for="description" class="col-sm-2 control-label">Event time</label>
    <div class="col-sm-10">
        <input type="date" name="time" id="time" class="form-control"
               value="{{ isset($event->time) ? $event->time : old('time') }}" required="required" title="">
    </div>
</div>