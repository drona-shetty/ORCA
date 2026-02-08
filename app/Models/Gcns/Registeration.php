<?php

 namespace App\Models\Gcns;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Registeration extends Model
 {
     use HasFactory;

     protected $table = 'gcns23event_register';
     protected $fillable = ['fname','lname','email','phonenumber','occupation','organization','schedule_id'];
 }