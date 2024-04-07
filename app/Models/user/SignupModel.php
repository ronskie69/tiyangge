<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignupModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = "";

    public $fillable = [
        'username',
        'password',
        'alias'
    ];
}
