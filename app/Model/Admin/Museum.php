<?php

namespace App\Model\Admin;

use App\Model\Admin\Hotel;
use App\Model\Admin\Governorate;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'address_en',
        'address_ar',
        'start_work_time',
        'end_work_time',
        'ticket_price',
        'image_one',
        'image_two',
        'image_three',
        'desc_en',
        'desc_ar',
        'governorate_id',
    ];


    public function antiques()
    {
        return $this->hasMany(Antique::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }





}
