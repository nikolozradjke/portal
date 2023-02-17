<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'structure_id',
        'title',
        'type',
        'salary',
        'currency',
        'salary_clean',
        'quantity',
        'description'
    ];

    public function structure(){
        return $this->belongsTo(Structure::class, 'structure_id', 'id');
    }

    public function competitions(){
        return $this->hasMany(Competition::class, 'position_id', 'id');
    }
}
