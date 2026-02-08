<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CYPVolunteer extends Model
{
    use HasFactory;
    
    protected $table = 'cyp_volunteers';
    protected $fillable = ['name','email', 'age', 'event_id', 'mobile'];
}
