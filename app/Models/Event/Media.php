<?php

 namespace App\Models\Event;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Media extends Model
 {
     use HasFactory;

     protected $table = 'event_media';
     protected $fillable = ['sequence_no','files', 'gcns'];
 }