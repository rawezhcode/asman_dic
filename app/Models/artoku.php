<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artoku extends Model
{
    use HasFactory;
    protected $table = 'artoku';
    protected $guarded =[];
    public $timestamps = false;

    public function favorites()
    {
        return $this->hasMany(favorite::class, 'artoku_id', 'id');
    }

}
