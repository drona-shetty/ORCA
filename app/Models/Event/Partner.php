<?php

 namespace App\Models\Event;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Partner extends Model
 {
     use HasFactory;

     protected $table = 'event_partner';
     protected $fillable = ['gcns', 'title','logo','content','link'];
 }