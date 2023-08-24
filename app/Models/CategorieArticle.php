<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieArticle extends Model
{
    use HasFactory;
    protected $fillable=[
        'categorie',
    ];

    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
