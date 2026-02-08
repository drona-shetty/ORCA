<?php

 namespace App\Models\Event;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Schedule extends Model
 {
     use HasFactory;

     protected $table = 'event_schedule';
     protected $fillable = ['gcns', 'title','scheduleDate'];
 }