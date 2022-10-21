<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Owner extends Model
{
    use HasFactory;

    public function animals() {
        return $this->hasMany(Animal::class);

    }
}
