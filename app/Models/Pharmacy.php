<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marketing;

class Pharmacy extends Model
{
    use HasFactory;
    protected $fillable=['name','address','officer_id','pharmacy_name','phone_id','status'];

    public function marketing()
    {
        return $this->belongsTo(Marketing::class,'officer_id','id');
    }
}
