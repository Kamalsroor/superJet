<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    public function ReservationsInformation()
    {
        return $this->hasMany('App\ReservationsInformation' , 'reservation_id');
    }
}
