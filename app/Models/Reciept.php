<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciept extends Model
{
    use HasFactory;

    public function items() {
        $this->hasMany(RecieptItem::class);
    }

    public function payments() {
        $this->hasMany(RecieptPayment::class);
    }
}
