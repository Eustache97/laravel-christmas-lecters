<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecter extends Model
{
    use HasFactory;
    protected $fillable = ['childrenName', 'childrenSurname', 'adress', 'city', 'arrivalDate', 'present', 'text', 'rating', 'consegned'];
}
