<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Testament extends Model
{
    use HasFactory;

    protected $fillable = ['testament_name', 'user_id'];
    // public $timestamps = false;

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
