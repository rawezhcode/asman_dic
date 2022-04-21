<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;
    protected $table = 'favorite';
    protected $guarded =[];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function entoku()
    {
        return $this->belongsTo(entoku::class, 'entoku_id', 'id');
    }
    public function kutoen()
    {
        return $this->belongsTo(kutoen::class, 'kutoen_id', 'id');
    }

}
