@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-2">
            <form action="/p" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <h3>
                        Add new post
                    </h3>
                </div>

                <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }} row">
                    <label for="caption" class="col-md-4 control-label">Post Caption</label>

                    <div>
                        <input id="name" type="text" class="form-control" name="caption" value="{{ old('caption') }}">

                        @if ($errors->has('caption'))
                        <span class="help-block">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 control-label">Pick image</label>
                    <input type="file" class="form-control file" name="image" id="image" />
                    @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row" style="padding-top: 15px">
                    <button class="btn btn-primary" >
                        Add new post
                    </button>
                </div>

            </form>
        </div>

    </div>

</div>
@endsection
