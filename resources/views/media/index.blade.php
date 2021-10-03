@extends('layouts.app')
@section('content')

<!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*">Tous</a>
                        <a href="#" data-filter=".doc" class="active">Documents</a>
                        <a href="#" data-filter=".video">Videos</a>
                        <a href="#" data-filter=".audio">Audios</a>
                        <a href="#" data-filter=".image">Images</a>
                        <a href="#" data-filter=".pdf">PDF</a>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">

                @forelse ($medias as $media)
                 <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item {{$media->type}}">
                    <div class="single-album">
                        @php
                            $img = 'img/'.$media->type.'.png';
                        @endphp
                        <img src="{{asset($img)}}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>{{$media->name}}</h5>
                            </a>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                <button type="button" class="btn btn-default">
                                  <img src="{{asset('img/down.png')}}" style="height: 20px; width: 20px" alt="">
                                </button>
                                <button type="button" class="btn btn-default">
                                  <img src="{{asset('img/edit.png')}}" style="height: 20px; width: 20px" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-info">
                        Aucun fichier pour l'instant!
                    </div>
                @endforelse



            </div>
        </div>
    </section>
    <!-- ##### Album Catagory Area End ##### -->

@endsection
