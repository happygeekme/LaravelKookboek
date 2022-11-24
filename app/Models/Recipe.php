<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('searchRecipe') . '%')
                ->orWhere('instructions', 'like', '%' . request('searchRecipe') . '%')
                ->orWhere('note', 'like', '%' . request('searchRecipe') . '%');
        }
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('measurement', 'amount', 'note_user')
            ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
