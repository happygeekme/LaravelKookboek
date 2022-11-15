<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('measurement_id', 'amount', 'note_user')
            ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
