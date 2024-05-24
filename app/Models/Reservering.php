<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accomodaties;

class Reservering extends Model
{
    use HasFactory;

    public function Accomodatie()
    {
        return $this->hasMany(Accomodaties::class);
    }
    
}