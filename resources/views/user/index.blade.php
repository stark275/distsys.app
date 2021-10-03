@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users List</div>

                <div class="card-body">
                   <div class="list-group">

                    @forelse ($users as $user)
                        <a href="{{config('app.middleware')}}{{ route('medias',['user' => $user],false ) }}" class="list-group-item list-group-item-action" >
                            <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$user->name}}</h5>
                            <small class="text-muted">{{$user->medias->count()}} File(s)</small>
                            </div>
                        </a>
                    @empty
                        <div class="alert alert-warning"> No User for the moment!</div>
                    @endforelse


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
