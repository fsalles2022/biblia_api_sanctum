<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['book_name', 'book_position', 'abbreviation', 'testament_id'];

    public function testament(){
        return $this->belongsTo(Testament::class);
    }
    
}
