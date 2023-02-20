<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountAutopark extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'cars_count',
        'personalled',
        'need_replacement',
        'expense'
    ];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}
