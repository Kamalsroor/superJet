<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Bus extends Model
{
    use Translatable;
    protected $translatable = ['name','doc'];

    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
