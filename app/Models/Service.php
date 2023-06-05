<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'address', 'phone', 'cat_id'];
    public $timestamps = false;

    public function master()
    {
        return $this->hasMany(Master::class);
    }
}