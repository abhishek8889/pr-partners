<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publications';
    public function article_type(){
        return $this->hasOne(ArticleType::class, 'id','article_type');
    }
    public function region(){
        return $this->hasOne(Region::class, 'id','region');
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}

