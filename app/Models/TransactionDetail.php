<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
