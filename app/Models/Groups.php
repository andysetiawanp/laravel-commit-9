<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'no_telp', 'alamat'];

    public function friends()
    {
        return $this->hasMany('App\Models\Friends');
    }
}
