<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'patient_id',
        'times',
        'content'
    ];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
