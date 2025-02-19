<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offcycle extends Model
{
    public $guarded = [];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
