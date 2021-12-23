<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentUser extends Model
{
    use HasFactory;
    protected $fillable = ['fullname','address','mobile','email','usertype','shopname','active'];
    // public $timestamps=false;
}
