<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable =[
        'post_id',
        'user_id',
        'comment_body'
    ];

    public function post(){
        return $this->belongsTo(Post::class,'post_id','id');
    }
}
