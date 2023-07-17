<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function major(){
        return $this->belongsTo(Major::class);
    }
    public function sections(){
        return $this->hasMany(Sections::class); 
    }

}
