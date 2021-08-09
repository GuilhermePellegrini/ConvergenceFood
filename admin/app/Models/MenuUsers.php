<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuUsers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'users_admin_id',
        'menu_id',
    ];

    
}
