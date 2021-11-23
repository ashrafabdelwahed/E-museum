<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //


    protected $fillable = [

        'name_en',
        'name_ar',
        'address_en',
        'address_ar',
        'museum_id',
        'stars',
        'image_one',
        'image_two',
        'image_three',
    ];



    public function museum()
{
    return $this->belongsTo(Museum::class);
}
}
