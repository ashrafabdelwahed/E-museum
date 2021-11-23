<?php

namespace App\Model\Admin;

use App\Model\Admin\Museum;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected    $fillable = ['name'];


    public function museums()
    {
        return $this->hasMany(Museum::class);
    }

}
