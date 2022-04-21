<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kutoen extends Model
{
    use HasFactory;
    protected $table = 'kutoen';
    protected $guarded =[];
    public $timestamps = false;


    public function favorites()
    {
        return $this->hasMany(favorite::class, 'kutoen_id', 'id');
    }
}
