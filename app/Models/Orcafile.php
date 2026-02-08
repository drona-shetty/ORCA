<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcafile extends Model
{
    use HasFactory;

    protected $table = 'orcafiles';
    protected $fillable = ['embed_code', 'created_at', 'title', 'description'];
}