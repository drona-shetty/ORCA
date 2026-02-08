<?php

 namespace App\Models\Gcns;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Schedule extends Model
 {
     use HasFactory;

     protected $table = 'gcns23event_schedule';
     protected $fillable = ['title','scheduleDate'];
 }