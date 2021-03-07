<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    public $timestamps = false;
    protected $table = 'proveedores';
    protected $fillable = ['nombre'];
    protected $guarded = ['id', 'updated_at', 'created_at'];
}
