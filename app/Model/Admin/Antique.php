<?php

namespace App\Model\Admin;

use App\Model\Admin\Museum;
use App\Model\Admin\Civilization;
use Illuminate\Database\Eloquent\Model;

class Antique extends Model
{


    protected $fillable = [
        'name_en',
        'name_ar',
        'desc_en',
        'desc_ar',
        'civilization_id',
        'museum_id',
        'image_one',
        'image_two',
        'image_three',
    ];




public function civilization()
{
    return $this->belongsTo(Civilization::class);
}

public function museum()
{
    return $this->belongsTo(Museum::class);
}


}
