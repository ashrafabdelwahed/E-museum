<?php

namespace App\Model\Admin;

use App\Model\Admin\Antique;
use Illuminate\Database\Eloquent\Model;

class Civilization extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'desc_en',
        'desc_ar',
    ];


    public function antiques()
    {
        return $this->hasMany(Antique::class);
    }


}
