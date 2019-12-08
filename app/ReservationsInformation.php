<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ReservationsInformation extends Model
{
    public function Reservations()
    {
        return $this->belongsTo('App\Reservation' , 'reservation_id');
    }
}
