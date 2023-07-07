<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function hospital(){
        return $this->belongsTo(Hosptial::class);
    }
    protected $hidden=['created_at','updated_at'];
    
}
