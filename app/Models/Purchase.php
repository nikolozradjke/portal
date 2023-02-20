<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id ',
        'volume',
        'signed_contract',
        'difference',
        'tender_economic',
        'done_job',
        'contacts_resource',
        'ratio_resource',
        'start_date',
        'end_date'
    ];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}
