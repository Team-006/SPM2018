<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formi6 extends Model

{
    public $timestamps = false;
    protected $fillable = ['company','project','objectives','procedures','methodology','learning','measurable_outcome','effectiveness'];
}
