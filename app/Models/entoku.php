<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entoku extends Model
{
    use HasFactory;
    protected $table = 'entoku';
    protected $guarded =[];
    public $timestamps = false;
    // protected $casts = [
    //     "qyas" => 'array'
    // ];

    public function favorites()
    {
        return $this->hasMany(favorite::class, 'entoku_id', 'id');
    }
}
