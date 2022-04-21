<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kutoar extends Model
{
    use HasFactory;
    protected $table = 'kutoar';
    protected $guarded =[];
    public $timestamps = false;


    public function favorites()
    {
        return $this->hasMany(favorite::class, 'kutoar_id', 'id');
    }
}
