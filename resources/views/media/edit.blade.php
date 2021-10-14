@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update file</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- {{ route('update.medias', ['media' => $media],false ) }} --}}
                        {{-- {{ route('medias.update',['id' => $media->id],false ) }} --}}
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
                            <label for="visibility">Visibility</label>
                            <select id="visibility" class="form-control" name="public" aria-label="Default select example">
                                <option value="0">Private</option>
                                <option value="1">Public</option>
                            </select>
                            @error('public')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">
                            Edit
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
