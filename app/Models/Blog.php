<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function categie_articles():BelongsTo
    {
        return $this->belongsTo(CategorieArticle::class, 'categorie_articles_id');
    }
}
