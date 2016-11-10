@extends('masterchurch')
@section('title', 'Upload church image')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                    <h2>Upload church photo</h2>
                    <form action="{{ url('church-photos') }}" method="POST" class="form-horizontal" role="form"
                          enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label"><i
                                        class="material-icons">photo</i></label>
                            <div class="col-sm-10">
                                <input type="file" name="image">
                                @if($errors->has('image'))
                                    <p>
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" class="form-control" rows="5" required="required"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary"><i class="material-icons">file_upload</i>
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection