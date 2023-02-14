<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyPermisssion extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'agency_id'];
}
