<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'file';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
