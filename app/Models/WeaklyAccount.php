<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaklyAccount extends Model
{
    use HasFactory;

    protected $fillable = ['agency_id', 'file', 'file_name'];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}
