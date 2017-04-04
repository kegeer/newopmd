<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'number',
        'name',
        'card_id',
        'case_num'
    ];

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

}
