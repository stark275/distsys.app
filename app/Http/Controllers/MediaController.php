<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('media.index',[
            'medias' => $user->medias
        ]);
    }

    public function edit(Media $media)
    {
        //$this->authorize('update',$media);
        return view('media.edit',[
            'media' => $media
        ]);
    }

    public function update(Media $media)
    {
        $this->authorize('update', $media);

        // process

        return redirect()->route('medias', ['user' => auth()->user()]);
    }

    public function create()
    {
        return view('media.create');
    }

    public function store()
    {

        $data = request()->validate([
            'name' => ['required', 'string'],
            'image' => ['required', 'file','mimes:png,jpg,jpeg,mp4,mp3,doc,docx,xls,xlsx,zip,rar']
        ]);


        $imagePath = request('image')->store('uploads', 'public');

        Storage::disk('ftp')->put($imagePath,fopen(request()->file('image'), 'r+'));

        $ext =  request()->file('image')->extension();

        $img = ['jpg','jpeg','png',];
        $doc = ['doc','docx','xls','xlsx','zip','rar'];
        $video = ['mp4'];
        $audio = ['mp3'];

        $type = 'doc';

        if (in_array($ext,$img)) {
            $type = 'image';
        }elseif (in_array($ext, $video)) {
            $type = 'video';
        } elseif (in_array($ext, $doc)) {
            $type = 'doc';
        } elseif (in_array($ext, $audio)) {
            $type = 'audio';
        }

        auth()->user()->medias()->create([
            'name' => $data['name'],
            'type' => $type,
            'path' => $imagePath
        ]);

       // dd($file);

        return redirect()->to('http://localhost:8010/medias/'.auth()->user()->id);
    }
}
