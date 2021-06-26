<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'content',
    ];

    public function user ()
    {
        return $this->belongsto('App\Models\User');
    }
    
    public function post()
    {
        return $this->belongsto('App\Models\Post');
    }
}
