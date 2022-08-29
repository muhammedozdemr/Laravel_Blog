<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name','top_id','slug'];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'category_post');
    }

    public function sub_category()
    {
        return $this->hasMany('App\Models\Category', 'top_id', 'id');
    }

    public function top_category() {
        return $this->belongsTo('App\Models\Category', 'top_id')->withDefault([
            'name' => 'Ana Kategori'
        ]);
    }
}
