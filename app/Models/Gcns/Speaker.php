<?php

 namespace App\Models\Gcns;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Speaker extends Model
 {
     use HasFactory;

     protected $table = 'gcns23event_speaker';
     protected $fillable = ['gcns', 'name','image','designation','content'];
 }