<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(User $user)
    {
        return view('media.index',[
            'medias' => $user->medias->where('public', '0')
        ]);
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

       $file =  auth()->user()->medias()->create([
            'name' => $data['name'],
            'type' => $type,
            'path' => $imagePath
        ]);

       // dd($file);

        return redirect()->route('medias', ['user' => auth()->user()]);
    }
}
