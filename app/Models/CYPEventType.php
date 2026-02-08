<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CYPEventType extends Model
{
    use HasFactory;
    
    protected $table = 'cyp_eventTypes';
    protected $fillable = ['event_type'];
}
