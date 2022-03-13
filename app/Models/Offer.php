<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    // عشان لو اسم ال table غير اسم ال Model يتصلوا ببعض
    protected $table = 'offers';

    // في هذا المتغير يتم وضع اسماء ال columns الذي سيتعامل معها ال controller
    protected $fillable = ['name','price','details','created_at','updated_at'];

    // في هذا المتغير يتم وضع اسماء ال columns الذي سيتعامل معها ال controller ولكنها لن تظهر عند استدعائها فهي موجودة فقط في ال database
    protected $hidden   =  ['created_at','updated_at'];

    // الطبيعي ان ال timestamp بيتسجّل تلقائي في ال database لكن لومش عايزه يتسجّل نكتب الكود دا
    public $timestamps = false;
}
