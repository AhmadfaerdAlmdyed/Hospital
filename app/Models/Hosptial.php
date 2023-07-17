<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TobiSchulz\Favoritable\Traits\Favoriteable;
class Hosptial extends Model
{
    use HasFactory;
   
  
        protected $fillable = [
             'name',
             'is_active',
             'location'
        ];

    public function majors(){                                     
        return $this->belongsToMany(Major::class,'hospital_major','hospital_id','major_id');
    }
    public function doctors(){
        return $this->hasMany(Doctor::class);
    }
    
    public function getActiveStatusAttribute(){
        return $this->is_active ? 'Active' :'Non Active';
    }

    public function consultings(){
        return $this->hasMany(Consulting::class);
    }

    protected $hidden=['created_at','updated_at',];
    protected $appends=['active_status'];
  
}
