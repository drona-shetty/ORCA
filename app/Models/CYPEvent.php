<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CYPEvent extends Model
{
    use HasFactory;
    
    protected $table = 'cyp_events';
    protected $fillable = ['event','date', 'venue', 'created_at'];
}
