<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class Ingredient extends Model
{

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('note_user', 'like', '%' . request('search') . '%');
        }
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)
            ->withPivot( 'measurement', 'amount', 'note_user')
            ->withTimestamps();
    }


}
