<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal as A;
use App\Models\User as U;

class Order extends Model
{
    use HasFactory;

    public function takeanimal()
    {
        return $this->belongsTo(A::class, 'animal_id', 'id');
    }

    public function orderUserName()
    {
        return $this->belongsTo(U::class, 'user_id', 'id');
    }

    const STATUSES = [
        1 => 'New',
        2 => 'Approved',
        3 => 'Canceled',
        4 => 'Completed',
        5 => 'Archived',
    ];
}
