<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'parent_id', 'description'];

    public function children(){
        return $this->hasMany(Budget::class, 'parent_id', 'id');
    }
}
