<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailinglist extends Model
{
    protected $fillable = ['email'];

    public function getList()
    {

    }

}
