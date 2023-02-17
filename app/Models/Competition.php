<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'position_id',
        'type',
        'step',
        'start_date',
        'end_date',
        'description'
    ];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }
}
