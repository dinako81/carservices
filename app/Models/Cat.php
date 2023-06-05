<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'address', 'phone'];
    public $timestamps = false;

    public function service()
    {
        return $this->hasMany(Service::class);
    }

    
}