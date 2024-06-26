<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_text',
        'post_id',
        'preparation_time',
        'response_time',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
