<?php

 namespace App\Models\Gcns;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class About extends Model
 {
     use HasFactory;

     protected $table = 'gcns23event_about';
     protected $fillable = ['title','desc','content', 'image'];
 }