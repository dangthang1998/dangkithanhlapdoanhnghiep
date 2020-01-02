<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable=[
        'name',
        'parent_id',
        'url'
    ];

    public function posts () {
        return $this->hasMany(Post::class, 'id');
    }

    // public function childCategories() {
    //     return $this->hasMany(Category::class, 'parent_id', 'id');
    // }

    public function childs(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public static function tree() {
        return static::where('parent_id', '=', NULL)->get(); 
    }
}
