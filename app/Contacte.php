<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Contacte extends Model
{
    use Translatable;
    protected $translatable = ['branch_name','address'];
}
