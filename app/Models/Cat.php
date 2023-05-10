<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'colors_count', 'photo'];
    public $timestamps = false;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function gallery()
    {
        return $this->hasMany(Photo::class, 'cat_id', 'id');
    }
}