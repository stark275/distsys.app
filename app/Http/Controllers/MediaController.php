<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    protected $table = 'file';

    public function index(User $user)
    {
        dd($user->medias);
        return view('media.index');
    }
}
