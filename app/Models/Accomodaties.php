<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservering;

class Accomodaties extends Model
{
    use HasFactory;

    public function reservering()
    {
        return $this->belongsTo(Reservering::class, 'accomodatie_id', 'id');
    }
}