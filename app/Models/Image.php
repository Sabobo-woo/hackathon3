<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Image extends Model
{
    use HasFactory;

     public function image() {
        return $this->belongsTo(Animal::class);
    }

}
