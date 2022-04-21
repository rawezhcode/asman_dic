<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuitem extends Model
{
  use HasFactory;
  protected $fillable = ['title','name','slug','type','target','menu_id','created_at','updated_at'];    
}	