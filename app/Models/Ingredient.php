<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class Ingredient extends Model
{
    use HasFactory;

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)
            ->withPivot('measurement_id', 'amount', 'note_user')
            ->withTimestamps();
    }

    public function measurement()
    {
        return $this->hasMany(Measurement::class);
    }
}
