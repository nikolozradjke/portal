<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'agency_id',
        'city',
        'address',
        'longitude',
        'latitude',
        'start_working_hour',
        'end_working_hour',
        'phone',
        'comment',
        'image',
        'responsible_person_name',
        'responsible_person_phone',
        'responsible_person_email'
    ];

    public function structures(){
        return $this->hasMany(Structure::class, 'agency_id', 'id');
    }

}
