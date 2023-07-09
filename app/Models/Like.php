<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lile extends Model
{
    protected $fillable = ['reply_id','user_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
