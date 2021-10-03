@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New file</div>

                <div class="card-body">
                    <form method="POST" action="{{route('medias.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="caption">Name</label>
                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="caption" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choisir un fichier</label>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Uploader
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
