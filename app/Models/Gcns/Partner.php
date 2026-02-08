<?php

 namespace App\Models\Gcns;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Partner extends Model
 {
     use HasFactory;

     protected $table = 'gcns23event_partner';
     protected $fillable = ['title','logo','content','link'];
 }