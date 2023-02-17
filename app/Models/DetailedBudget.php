<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailedBudget extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'branch_id',
        'details',
        'start_date',
        'end_date',
        'user_id'
    ];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }

    //to do brach relation

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
