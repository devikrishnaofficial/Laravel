<?php

namespace App\Models;
use App\Models\Usercrd;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercrd extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age'
    ];
}
