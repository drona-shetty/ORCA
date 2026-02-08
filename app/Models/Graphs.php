<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

 class Graphs extends Model
 {
     use HasFactory;

     protected $table = 'graphs_page';
     protected $fillable = ['image', 'content','sequence_no','name','designation','facebook','twitter','instagram','linkedin'];
 }