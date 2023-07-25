<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'categie_articles_id',   
        'title',
        'text',
        'image',
        
    ];
    protected $casts=[
        'created_at'=>'datetime',
    ];
}
