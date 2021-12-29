<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctors;

class Patient extends Model
{
    use HasFactory;

         protected $fillable=['date','patient','name','gender','dob','occupation','relative'
                             ,'rname','phone','home-phone','blood','religion','address','doctor'
                             ,'bed','image','symptoms','username'];

    public function docters()
    {
        return $this->belongsTo(Doctors::class,'doctor','id');
    }

    public function bed_seat()
    {
        return $this->belongsTo(Bed::class);
    }
}
