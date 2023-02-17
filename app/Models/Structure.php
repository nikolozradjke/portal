<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id', 'agency_id', 'title'
    ];

    public function agency(){
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }

    public function children(){
        return $this->hasMany(Structure::class, 'parent_id', 'id');
    }

    public function positions(){
        return $this->hasMany(Position::class, 'structure_id', 'id');
    }
}
