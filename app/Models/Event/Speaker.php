<?php

 namespace App\Models\Event;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Speaker extends Model
 {
     use HasFactory;

     protected $table = 'event_speaker';
     protected $fillable = ['gcns', 'name','image','designation','content'];
 }