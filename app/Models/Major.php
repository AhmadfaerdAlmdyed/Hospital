<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    public function hospitals(){
        return $this->belongsToMany(Hosptial::class);
    }
    public function getActiveStatusAttribute(){
        return $this->is_active ? 'Active' :'Non Active';
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
