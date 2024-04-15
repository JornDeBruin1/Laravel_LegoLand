<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bestellingen;
use App\Models\Tickets;

class BestellingRegel extends Model
{
    use HasFactory;

    public function bestelling()
    {
        return $this->belongsTo(Bestellingen::class, 'bestelling_id', 'id');
    }

    public function ticket()
    {
        return $this->belongsTo(Tickets::class, 'ticket_id', 'id');
    }
}