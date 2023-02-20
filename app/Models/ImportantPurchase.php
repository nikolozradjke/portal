<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id ',
        'type',
        'object',
        'step',
        'status',
        'start_date',
        'end_date'
    ];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}
