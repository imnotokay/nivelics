<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public $timestamps = false;
    protected $table = 'productos';
    protected $guarded = ['id', 'updated_at', 'created_at'];
}
