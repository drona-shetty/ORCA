<?php

 namespace App\Models\Gcns;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Media extends Model
 {
     use HasFactory;

     protected $table = 'gcns23event_media';
     protected $fillable = ['sequence_no','files'];
 }