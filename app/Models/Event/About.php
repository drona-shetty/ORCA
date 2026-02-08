<?php

 namespace App\Models\Event;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class About extends Model
 {
     use HasFactory;

     protected $table = 'event_about';
     protected $fillable = ['title','desc','content', 'gcns', 'image'];
 }