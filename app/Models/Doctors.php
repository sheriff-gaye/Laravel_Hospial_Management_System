<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Specialist;
use App\Models\Department;

class Doctors extends Model
{
    use HasFactory;

    protected $fillable=['name','username','dob','address','gender','country',
                'phone','specialist','department','biography','image','status'];

    public function specialisty()
    {
        return $this->belongsTo(Specialist::class,'specialist','id');
    }

    public function departmenty()
    {
        return $this->belongsTo(Department::class,'department','id');
    }
}
