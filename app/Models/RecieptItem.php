<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecieptItem extends Model
{
    use HasFactory;

    public function reciept() {
        return $this->belongsTo(Reciept::class);
    }
}
