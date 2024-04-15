<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BestellingRegel;

class Bestellingen extends Model
{
    use HasFactory;

    protected $table = 'bestellingen';

    public function bestelling_regels()
    {
        return $this->hasMany(BestellingRegel::class);
    }
}