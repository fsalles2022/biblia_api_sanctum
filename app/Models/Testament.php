<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testament extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // public $timestamps = false;
}
