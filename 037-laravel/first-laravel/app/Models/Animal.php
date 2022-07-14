<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color as C;


class Animal extends Model
{
    use HasFactory;

    public function takecolor()
    {
        return $this->belongsTo(C::class, 'color_id', 'id');
    }
}
