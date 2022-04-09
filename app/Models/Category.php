<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends=['parent'];
    
    public function categories(){
        return $this->hasMany(Category::class);
    }

    #one to many: her kategori bir parenta aittir.
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    #one to many: her kategorinin birden fazla childi olabilir.
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}
