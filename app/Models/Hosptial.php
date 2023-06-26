<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosptial extends Model
{
    use HasFactory;
    public function majors(){
        return $this->belongsToMany(Major::class,'hospital_major','hospital_id','major_id');
    }

    
    public function getActiveStatusAttribute(){
        return $this->is_active ? 'Active' :'Non Active';
    }
}
