<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
  use HasFactory;
  protected $fillable = ['title','location','content','created_at','updated_at'];      


  public function submenus()
  {
    return $this->hasMany('App\Models\menu','parent');
  }
}	