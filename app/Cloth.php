<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //public $table = "cloths";
    protected $fillable = [
        'type', 'name', 'property', 'quantity'
    ];
}
